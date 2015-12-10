<?php get_header(); ?>
<!-- 検索結果 -->
    <?php
    $s = $_GET['s'];
    ?>
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
    <section class="container u-mt60">
        <h1 class="m-heading-category">
            <?php if($s){ ?>"<?php echo $s; ?>"の検索結果<?php } ?>
        </h1>
        <form class="m-search u-pull-right" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
            <div class="m-search-body">
                <input type="search" name="s" id="search" placeholder="検索" required>
                <label for="s"><i class="material-icons">search</i></label>
            </div>
        </form>
    </form>
    </section>

    <?php
    query_posts( array(
        's' => $s,
        'category__not_in' => array(9),//FAQカテゴリ除外
        'post__not_in' => array(2, 13, 7, 16)//固定ページ除外
        )
    );
    ?>
        <div class="container">
            <div class="row fn-grid u-border-top u-pt15">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col s6 m3 fn-grid-item">
                    <section class="card card--masony">
                        <a href="<?php the_permalink();?>">
                            <div class="card-image">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('medium');
                                }
                                ?>
                            </div>
                            <h1 class="card-action card-action--masonry">
                                <?php the_title(); ?>
                            </h1>
                        </a>
                    </section>
                </div>
            <?php endwhile; else : ?>
                <div>該当なし</div>
            <?php endif;?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
        ?>
        <div class="row">
            <?php if (function_exists('fn_pagenation')) {
                fn_pagenation($wp_query->max_num_pages);
            }?>
        </div>
    <?php wp_reset_query(); ?>

    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/category.min.js"></script>
    </body>
</html>