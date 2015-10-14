    //モジュールを定義：ngMessagesモジュールへの依存関係を宣言
    var app = angular.module('contactApp', [ 'ngMessages' ]);
    //コントローラーを定義
    app.controller('contactController', ['$scope', function($scope) {
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
