    //モジュールを定義：ngMessagesモジュールへの依存関係を宣言
    var app = angular.module('contactApp', [ 'ngMessages' ]);
    //コントローラーを定義
    app.controller('contactController', ['$scope', function($scope) {
    }]);
    app.controller('contactCorpController', ['$scope', function($scope) {
        $scope.kinds = [
            {id: 'contact_1', name: 'tixeeboxチケットの導入'},
            {id: 'contact_2', name: '弊社への取材'},
            {id: 'contact_3', name: '弊社との業務提携'},
            {id: 'contact_4', name: 'その他'}
        ];

        $scope.check = function() {
            var checks = [];
            angular.forEach($scope.kinds, function(kind) {
                if (kind.checked) {
                    checks.push(kind.name);
                }
            });

            $scope.check_bind = checks.join(',　');

        };

        $scope.options = {};
    }]);
    //ディレクティブを定義
    app.directive('match', ['$parse', function($parse) {
        return {
            require: 'ngModel',
            link: function(scope, elem, attrs, ctrl) {
                scope.$watch(function() {
                    var target = $parse(attrs.match)(scope);  // 比較対象となるモデルの値
                    return !ctrl.$modelValue || target === ctrl.$modelValue;
                }, function(currentValue) {
                    ctrl.$setValidity('mismatch', currentValue);
                });
            }
        }
    }]);
