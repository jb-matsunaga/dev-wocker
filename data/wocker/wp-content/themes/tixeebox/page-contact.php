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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
        <section class="navbar-fixed">
        <nav class="nav-category">
            <div class="nav-wrapper">
                <a href="<?php bloginfo('url'); ?>" class="brand-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="tixeeboxロゴ">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="nav-a right hide-on-med-and-down">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop">TOP</a></li>
                    <li><a class="fn-pageScroll" href="#link-schedule">チケット受け取り開始日時</a></li>
                    <li><a class="fn-pageScroll" href="#link-receive">チケット受け取り方法</a></li>
                    <li><a class="fn-pageScroll" href="#link-contact">お問い合わせ</a></li>
                    <li><a href="https://tixeebox.tv/lp/how-to/" target="_blank">tixeeboxご利用方法</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop">TOP</a></li>
                    <li><a class="fn-pageScroll" href="#link-schedule">チケット受け取り開始日時</a></li>
                    <li><a class="fn-pageScroll" href="#link-receive">チケット受け取り方法</a></li>
                    <li><a class="fn-pageScroll" href="#link-contact">お問い合わせ</a></li>
                    <li><a href="https://tixeebox.tv/lp/how-to/" target="_blank">tixeeboxご利用方法</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container" ng-controller="contactController">
        <section class="row">
            <h1 class="heading-a u-mt30 u-mb30 u-text-center">お問い合わせ</h1>
            <p>法人のお客様のお問合せは必要事項をご記入の上、下記のフォームからお問合せください。</p>
            <p>
            詳細なご相談内容については、必要に応じて別途NDA（機密保持契約）の締結をさせていただきます。<br>
            弊社は皆様のプライバシーを尊重し、個人情報を保護するために細心の注意を払っております。
            </p>
        </section>
        
        <div class="row">
            <form name="contactForm" class="col s12" action="/contact-regist/" method="post" ng-submit="submit()" novalidate>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="山田" id="name_sei" name="name_sei" ng-model="name_sei" ng-maxlength="20" required type="text" class="validate">
                        <label for="name_sei">お名前（姓）</label>
                        <div ng-messages="contactForm.name_sei.$error" ng-if="contactForm.name_sei.$touched">
                            <div class="alert" ng-message="required">入力必須項目です</div>
                            <div class="alert" ng-message="maxlength">20文字以内で入力必須項目です。</div>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="太郎" id="name_mei" name="name_mei" ng-model="name_mei" ng-maxlength="20" required type="text" class="validate">
                        <label for="name_mei">お名前（名）</label>
                        <div ng-messages="contactForm.name_mei.$error" ng-if="contactForm.name_mei.$touched">
                            <div class="alert" ng-message="required">入力必須項目です</div>
                            <div class="alert" ng-message="maxlength">20文字以内で入力必須項目です。</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="email" name="email" ng-model="email" ng-pattern="/^[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" required type="email" class="validate">
                        <label for="email">メールアドレス</label>
                        <div ng-messages="contactForm.email.$error" ng-if="contactForm.email.$touched">
                            <div class="alert" ng-message="required">入力必須項目です</div>
                            <div class="alert" ng-message="pattern">正しいメールアドレスを入力してください</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="emailConfirm" name="emailConfirm" ng-model="emailConfirm" ng-pattern="/^[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" autocomplete="off" match="email" required type="email" class="validate">
                        <label for="emailConfirm">メールアドレス<small>(確認のため再度入力して下さい)</small></label>
                        <div ng-messages="contactForm.emailConfirm.$error" ng-if="contactForm.emailConfirm.$touched">
                            <div class="alert" ng-message="required">入力必須項目です</div>
                            <div class="alert" ng-message="pattern">正しいメールアドレスを入力してください</div>
                            <div class="alert" ng-message="mismatch">メールアドレスが一致していません</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea placeholder="ご入力ください" id="content" name="content" ng-model="content" required class="materialize-textarea validate"></textarea>
                        <label for="content">お問い合わせ内容</label>
                        <div ng-messages="contactForm.content.$error" ng-if="contactForm.content.$touched">
                            <div class="alert" ng-message="required">入力必須項目です</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button ng-disabled="contactForm.$invalid" class="btn btn-large waves-effect waves-light u-center-block" type="submit" value="登録する" />送信する</button>
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