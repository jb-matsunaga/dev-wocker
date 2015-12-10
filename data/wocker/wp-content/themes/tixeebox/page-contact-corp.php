<!DOCTYPE html>
<html lang="ja" ng-app="contactApp">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="index, follow" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <meta name="description" content="“tixeebox”（ティクシーボックス）は電子チケット発券のみに特化し、システム開発不要の主催者に導入しやすく、ユーザーにも利用しやすい電子チケットアプリサービスです。 ">
        <link rel="canonical" href="https://tixeebox.tv/">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="image/gif" href="animated_favicon1.gif">
        <title>tixeebox（ティクシーボックス）| スマホチケット発券アプリ </title>
        <link href="<?php bloginfo( 'template_directory' ); ?>/css/common.css" rel="stylesheet">
    </head>
    <body id="fn-hesiveTop">
        <div id="fn-scrollToggle" class="m-btnTop">
            <a class="fn-pageScroll btn-floating waves-effect waves-light" href="#fn-hesiveTop"></a>
        </div>

        
    <div class="navbar-fixed">
    <nav class="u-hidden-xs">
        <div class="nav-wrapper">
            <a href="<?php bloginfo('url'); ?>" class="brand-logo">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="tixeeboxロゴ">
            </a>
            <ul class="m-listSns right">
                <li>
                    <a href="https://twitter.com/tixeebox_info" target="_blank">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
            </ul>
            <ul class="m-hover m-hover--colorA nav-a right hide-on-med-and-down">
                <li class='m-dropdown'>
                    <!-- Dropdown Trigger -->
                    <a class="fn-dropdown-button m-dropdown-head" data-hover="EVENT"><span class="ic-arrow">EVENT</span></a>
                    <!-- Dropdown Structure -->
                    <ul class='m-dropdown-body'>
                        <li><a href="/event/special/" data-hover="スペシャルイベント一覧">スペシャルイベント一覧</a></li>
                        <li><a href="/event/lp/" data-hover="イベント一覧">イベント一覧</a></li>
                        <li><a href="/event/archives/" data-hover="アーカイブ">アーカイブ</a></li>
                    </ul>
                </li>
                <li><a href="/lp/how-to/" data-hover="HOW TO">HOW TO</a></li>
                <li><a href="/faq/" data-hover="FAQ">FAQ</a></li>
                <li><a target="_blank" href="http://livestyles.tv/aboutus" data-hover="ABOUT US">ABOUT US</a></li>
                <li class='m-dropdown'>
                    <!-- Dropdown Trigger -->
                    <a class="fn-dropdown-button m-dropdown-head" data-hover="CONTACT"><span class="ic-arrow">CONTACT</span></a>
                    <!-- Dropdown Structure -->
                    <ul class='m-dropdown-body'>
                        <li><a href="/contact-corp/" data-hover="お問い合わせ（法人）">お問い合わせ（法人）</a></li>
                        <li><a href="/contact/" data-hover="お問い合わせ（個人）">お問い合わせ（個人）</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="u-visible-xs navbar-fixed-top">

        <ul id="slide-out" class="side-nav">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
            <li class='m-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button m-dropdown-head">EVENT</a>
                <!-- Dropdown Structure -->
                <ul class='m-dropdown-body'>
                    <li><a href="/event/special/">スペシャルイベント一覧</a></li>
                    <li><a href="/event/lp/">イベント一覧</a></li>
                    <li><a href="/event/archives/">アーカイブ</a></li>
                </ul>
            </li>
            <li><a target="_blank" href="https://tixeebox.tv/lp/how-to/">HOW TO</a></li>
            <li><a href="/faq/">FAQ</a></li>
            <li><a target="_blank" href="http://livestyles.tv/aboutus">ABOUT US</a></li>
            <li class='m-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button m-dropdown-head">CONTACT</a>
                <!-- Dropdown Structure -->
                <ul class='m-dropdown-body'>
                    <li><a href="/contact-corp/">お問い合わせ（法人）</a></li>
                    <li><a href="/contact/">お問い合わせ（個人）</a></li>
                </ul>
            </li>
        </ul>
        <a data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo-white.png" alt="tixeeboxロゴ"></a>
        <ul class="social-icons">
            <li class="right">
                <a href="https://twitter.com/tixeebox1" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
    <div class="container u-pt60" ng-controller="contactCorpController">
        <section class="row">
            <h1 class="m-heading-sub u-mt30 u-mb30">お問い合わせ（法人）</h1>
            <p>法人のお客様のお問合せは必要事項をご記入の上、下記のフォームからお問合せください。</p>
            <p>
            詳細なご相談内容については、必要に応じて別途NDA（機密保持契約）の締結をさせていただきます。<br>
            弊社は皆様のプライバシーを尊重し、個人情報を保護するために細心の注意を払っております。<br>
            <span class="m-alert">*印の入力は必須となります。必須項目を入力していただくと「確認」ボタンが動作します。</span>
            </p>
        </section>
        <div class="row">
            <form name="contactForm" class="col s12" action="/contact-corp-regist/" method="post" ng-submit="submit()" novalidate>
                <div class="row">
                    <div class="col s12">
                        <label>お問合せ種別</label>
                        <checkbox-group min-required="1">
                        <ul class="m-listCheckbox">
                            <li ng-repeat="kind in kinds">
                            <input type="checkbox" name="kind[]" ng-model="kind.checked" class="filled-in" id="{{kind.id}}" value="{{kind.name}}" />
                                <label for="{{kind.id}}">{{kind.name}}</label>
                            </li>
                        </ul>
                        </checkbox-group>
                        <ninja-customer></ninja-customer>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="株式会社カンパニー" id="company_name" name="company_name" ng-model="company_name" ng-maxlength="20" required type="text" class="validate">
                        <label for="company_name">会社名<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.company_name.$error" ng-if="contactForm.company_name.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="maxlength">20文字以内で入力必須項目です。</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="山田" id="name_sei" name="name_sei" ng-model="name_sei" ng-maxlength="10" required type="text" class="validate">
                        <label for="name_sei">お名前（姓）<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.name_sei.$error" ng-if="contactForm.name_sei.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="maxlength">10文字以内で入力必須項目です。</div>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="太郎" id="name_mei" name="name_mei" ng-model="name_mei" ng-maxlength="10" required type="text" class="validate">
                        <label for="name_mei">お名前（名）<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.name_mei.$error" ng-if="contactForm.name_mei.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="maxlength">10文字以内で入力必須項目です。</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="email" name="email" ng-model="email" ng-pattern="/^[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" required type="email" class="validate">
                        <label for="form-email">メールアドレス<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.email.$error" ng-if="contactForm.email.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="pattern">正しいメールアドレスを入力してください</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="email_confirm" name="email_confirm" ng-model="email_confirm" ng-pattern="/^[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" autocomplete="off" match="email" required type="email" class="validate">
                        <label for="form-email-confirm">メールアドレス(確認)<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.email_confirm.$error" ng-if="contactForm.email_confirm.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="pattern">正しいメールアドレスを入力してください</div>
                            <div class="m-alert" ng-message="mismatch">メールアドレスが一致していません</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="03-1234-5678" id="phone" name="phone" ng-model="phone" ng-pattern="/^[(]{0,1}[0-9]{2,4}[)\.\- ]{0,1}[0-9]{4}[\.\- ]{0,1}[0-9]{4}$/" required type="tel" class="validate">
                        <label for="phone">電話番号<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.phone.$error" ng-if="contactForm.phone.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                            <div class="m-alert" ng-message="pattern">ハイフンを入れて半角数字で電話番号を入力してください</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="http://www.website.com" id="web_url" name="web_url" ng-model="web_url" type="text" class="validate">
                        <label for="web_url">貴社ウェブサイトURL</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="ご入力ください" id="contact_title" name="contact_title" ng-model="contact_title" required type="text" class="validate">
                        <label for="form-contact-title">お問い合わせ件名<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.contact_title.$error" ng-if="contactForm.contact_title.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea placeholder="ご入力ください" id="contact_content" name="contact_content" ng-model="contact_content" required class="materialize-textarea"></textarea>
                        <label for="form-contact-content">お問い合わせ内容<small class="m-alert">*</small></label>
                        <div ng-messages="contactForm.contact_content.$error" ng-if="contactForm.contact_content.$touched">
                            <div class="m-alert" ng-message="required">入力必須項目です</div>
                        </div>
                    </div>
                </div>
                <div class="row u-pt30 u-pb60">
                    <div class="col s12">
                        <button id="fn-modalOpen" type="button" ng-click="check()" ng-disabled="contactForm.$invalid" class="btn btn-large waves-effect waves-light u-center-block" href="#modal1">確認する</button>
                    </div>
                </div>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <section class="row">
                            <h1 class="m-heading-sub u-mb30">お問い合わせ内容の確認</h1>
                            <ul class="collection">
                                <li class="collection-item">
                                    <p>お問い合わせ種別：<br><span>{{check_bind}}</span></p>
                                </li>
                                <li class="collection-item">
                                    <p>会社名：<span ng-bind="company_name"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>お名前（姓）：<span ng-bind="name_sei"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>お名前（名）：<span ng-bind="name_mei"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>メールアドレス：<span ng-bind="email"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>電話番号：<span ng-bind="phone"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>貴社ウェブサイトURL：<span ng-bind="web_url"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>お問い合わせ件名：<span ng-bind="contact_title"></span></p>
                                </li>
                                <li class="collection-item">
                                    <p>
                                        お問い合わせ内容：<br>
                                        <span ng-bind="contact_content" class="u-pre-wrap"></span>
                                    </p>
                                </li>
                            </ul>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-action waves-effect">送信する</button>
                                <button type="button" class="btn btn-cancel modal-action modal-close u-mr15">キャンセル</button>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
        <section class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </section>
    </div>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/contact.min.js"></script>
    </body>
</html>