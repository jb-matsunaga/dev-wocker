<?php get_header(); ?>
    <!--#fn-parallax-1-->
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
    <div class="container">
        <section class="row">
            <div class="col s6">
            6
            </div>
            <div class="col s6">
                <div class="row">
                    <div class="col s6">a
                    </div>
                    <div class="col s6">a
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">a
                    </div>
                    <div class="col s6">a
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h1><p>Category: <?php single_cat_title(); ?></p></h1>
        </section>
    </div>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    </body>
</html>
