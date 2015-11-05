<?php get_header(); ?>
    <!--#fn-parallax-1-->
    <div class="c-parallax" id="fn-parallax-1">
    <div class="c-parallax-overlay"></div>
    <div class="c-parallax-content">
        <section class="c-parallax-body">
            <h1>
                <img class="c-parallax-logo" src="<?php bloginfo( 'template_directory' ); ?>/img/logo-white.png" alt="tixeeboxロゴ">
            </h1>
            <h2 class="heading-c">
                電子チケットの発券、<br>及び入場管理！<br>
                スマホユーザーに新たな<br>電子チケット入場体験を！
            </h2>
            <ul class="c-list-icons clearfix">
                <li>
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/app-icon.png" alt="tixeeboxAPPロゴ">
                </li>
                <li>
                    <a href="https://itunes.apple.com/jp/app/tixeebox-dian-zichiketto-kuponno/id1014457201?mt=8" target="_blank">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/app-banner.png" alt="APP STORE BANNER">
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=tv.tixeebox.tixeeboxappli&hl=ja" target="_blank">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/app-google-banner.png" alt="Google Play BANNER">
                    </a>
                </li>
            </ul>
        </section>
    </div>
</div>
    <?php if ( is_home() ) { ?>
<div class="header">
<?php } else {?>
<div class="navbar-fixed">
<?php } ?>
    <nav class="hidden-xs">
        <ul class="nav-a left hide-on-med-and-down">
            <li class="nav-a-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/logo-white.png" alt="tixeeboxロゴ">
                </a>
            </li>
        </ul>
        <ul class="nav-a right hide-on-med-and-down">
            <li class='fn-dropdown-button c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="c-dropdown-head">EVENT</a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/event/special/">スペシャルイベント一覧</a></li>
                    <li><a href="/event/lp/">イベント一覧</a></li>
                    <li><a href="/event/archives/">アーカイブ</a></li>
                </ul>
            </li>
            <li><a href="/lp/how-to/">HOW TO</a></li>
            <li><a target="_blank" href="http://livestyles.tv/aboutus">ABOUT US</a></li>
            <li class='fn-dropdown-button c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="c-dropdown-head">CONTACT</a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/contact-corp/">お問い合わせ（法人）</a></li>
                    <li><a href="/contact/">お問い合わせ（個人）</a></li>
                </ul>
            </li>
            <li class="u-pl30">
                <ul class="social-icons">
                    <li>
                        <a href="https://twitter.com/tixeebox1" target="_blank">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        
    </nav>
    <nav class="visible-xs navbar-fixed-top">

        <ul id="slide-out" class="side-nav">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
            <li class='fn-dropdown-button c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="c-dropdown-head">EVENT</a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/event/special/">スペシャルイベント一覧</a></li>
                    <li><a href="/event/lp/">イベント一覧</a></li>
                    <li><a href="/event/archives/">アーカイブ</a></li>
                </ul>
            </li>
            <li><a target="_blank" href="https://tixeebox.tv/lp/how-to/">HOW TO</a></li>
            <li><a target="_blank" href="http://livestyles.tv/aboutus">ABOUT US</a></li>
            <li class='fn-dropdown-button c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="c-dropdown-head">CONTACT</a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/contact-corp/">お問い合わせ（法人）</a></li>
                    <li><a href="/contact/">お問い合わせ（個人）</a></li>
                </ul>
            </li>
        </ul>
        <a data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo-white.png" alt="tixeeboxロゴ"></a>
        <ul class="social-icons">
            <li>
                <a href="https://twitter.com/tixeebox1" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
    <div class="wrapper">
        <section class="row container section-str">
            <a id="fn-showHere"></a>
            <h2 class="heading-b u-text-center">tixeeboxとは？</h2>
            <p class="grey-text text-darken-3 lighten-3">
                “tixeebox”（ティクシーボックス）は電子チケットの発券に特化し、システム開発不要の主催者に導入しやすく、ユーザーにも利用しやすい電子チケットアプリサービスです。tixeeboxでは転売の抑制としてSMSでのユーザー認証、チケット譲渡の制限機能を備えている他、電子チケットならではのチケットデザイン、動画などのコンテンツの付与にも対応可能です！
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                従来は紙で受取っていたチケットを、“tixeebox”アプリなら簡単に電子化＆スマホにダウンロード！コンビニや店頭に、チケットを受取に行く必要はありません。 イベント当日は、スマートフォンを見せてチケットを「もぎって」もらうだけ！紙チケットと同じ方法で入場できます！
            </p>
        </section>

        <section class="c-borderBox">
            <div class="c-borderBox-container">
                <div class="c-borderBox-body c-borderBox-body--string">
                    <h1 class="heading-b">チケットを簡単に<br>スマホで受け取り</h1>
                </div>
                <div class="c-borderBox-body u-pull-right">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/image1.png">
                </div>
            </div>
        </section>

        <section class="c-borderBox c-borderBox--second">
            <div class="c-borderBox-container">
                <div class="c-borderBox-body c-borderBox-body--string c-borderBox-body--long c-borderBox-body--right">
                    <h1 class="heading-b">入場方法は<br>チケット画面を"もぎる"だけ！</h1>
                </div>
                <div class="c-borderBox-body u-pull-left">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/image2.png">
                </div>
            </div>
        </section>

        <section class="c-borderBox c-borderBox--third">
            <div class="c-borderBox-container">
                <div class="c-borderBox-body c-borderBox-body--string">
                    <h1 class="heading-b">友達にLINEやメールで<br>チケットを送付可能</h1>
                </div>
                <div class="c-borderBox-body u-pull-right">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/image3.png">
                </div>
            </div>
        </section>

        <section class="c-borderBox c-borderBox--fourth">
            <div class="c-borderBox-container">
                <div class="c-borderBox-body c-borderBox-body--string c-borderBox-body--right">
                    <h1 class="heading-b">発券手数料は0円<br>アカウント登録も無料！</h1>
                </div>
                <div class="c-borderBox-body u-pull-left">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/image4.png">
                </div>
            </div>
        </section>

        <div class="thumbnail u-text-center u-pt15">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ticket_flow.png" alt="チケットの流れ">
        </div>
        <section class="row container section-str">
            <h2 class="heading-b u-text-center">なにができる？</h2>
            <p class="grey-text text-darken-3 lighten-3">
                    tixeeboxはスマートフォン向けの電子チケット発券に特化したツールで、主催者、プレイガイドが販売したチケットの電子化が行えます。これまでの電子チケットとは異なり、販売(決済)は自社、発券はtixeeboxで行えるため既存のシステムに容易に電子チケット発券を組み込むことが出来ます。CSVでの連携の他、APIでの連携にも対応しているので、システムを繋ぎ込めば継続的かつ、リアルタイムに電子チケットの発券をすることが可能になります。
            </p>
        </section>

                <?php
            $contact_title = get_post_meta($post->ID, 'cf-contactTitle', true);
            $contact_mail = get_post_meta($post->ID, 'cf-contactMail', true);
            $contact_tell = get_post_meta($post->ID, 'cf-contactTell', true);
        ?>

        <section class="c-contact">
            <div class="c-contact-head">
                <h1><?php echo $contact_title; ?></h1>
            </div>
            <div class="c-contact-body">
                <ul>
                    <li class="c-contact-info c-contact-info--mail">
                        <h2>メールでのお問い合わせ</h2>
                        <?php ?>
                            <?php echo '<a href="mailto:'.$contact_mail.'">'?>
                            <?php echo $contact_mail; ?>
                        </a>
                    </li>
                    <li class="c-contact-info c-contact-info--tell">
                        <h2>お電話でのお問い合わせ</h2>
                        <?php echo '<a href="tel:'.$contact_tell.'">' ?>
                            <?php echo $contact_tell; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </div>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    </body>
</html>
