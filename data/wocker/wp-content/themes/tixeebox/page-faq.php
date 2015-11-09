<?php get_header(); ?>
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
            <li><a href="/faq/">FAQ</a></li>
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

    <div class="u-text-center u-pt60 u-pb60">
        <section class="m-stripBg u-mt20 u-mb30">
            <h1 class="m-stripBg-title heading-category">
                <?php the_title(); ?>
            </h1>
        </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m3">
                <div id="fn-sticker">
                    <a class="m-stripBg m-stripBg--content u-mb15" href="/lp/how-to/" target="_blank">
                        <div class="m-stripBg--content-title">
                            はじめての方へ<br>
                            <small>(How To ページ)</small>
                        </div>
                        <p>
                            ご利用の際、まずはこちらをご覧ください
                        </p>
                    </a>
                </div>
            </div>
            <div class="col s12 m9">
            <ul class="collapsible popout" data-collapsible="accordion">
                <?php
                $cf_faqGroup = SCF::get( 'cf-faqGroup' );
                foreach ( $cf_faqGroup as $field_name => $field_value ) {
                    ?>
                <li>
                    <div class="collapsible-header">
                        <?php echo esc_html( $field_value['cf-question'] ); ?>
                    </div>
                    <div class="collapsible-body">
                        <?php echo  $field_value['cf-asked'] ; ?>
                    </div>
                </li>
                <?php } ?>
            </ul>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/faq.min.js"></script>
    </body>
</html>