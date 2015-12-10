<?php get_header(); ?>
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

    <div class="l-titleHead">
        <section class="m-stripBg u-mt20 u-mb30">
            <h1 class="m-stripBg-title m-heading-category">
                <?php the_title(); ?>
            </h1>
        </section>
    </div>

    <div class="container l-section">
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
                    <div class="collapsible-header m-collapsibleQa-header">
                        <?php echo esc_html( $field_value['cf-question'] ); ?>
                    </div>
                    <div class="collapsible-body m-collapsibleQa-body">
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