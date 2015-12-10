<?php get_header(); ?>
<!-- カテゴリ情報取得 -->
<?php
if ( have_posts() ) {
    $category = get_the_category();
    $cat_id   = $category[0]->cat_ID;
    $cat_name = $category[0]->cat_name;
    $cat_slug = $category[0]->slug;
}
?>

    <div class="navbar-fixed">
    <nav class="hidden-xs">
        <ul class="nav-a left hide-on-med-and-down">
            <li class="nav-a-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/logo-white.png" alt="tixeeboxロゴ">
                </a>
            </li>
        </ul>
        <ul class="m-socialIcons right">
            <li>
                <a href="https://twitter.com/tixeebox_info" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
        <ul class="m-hover m-hover--colorA nav-a right hide-on-med-and-down">
            <li class='c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button c-dropdown-head" data-hover="EVENT"><span class="ic-arrow">EVENT</span></a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/event/special/" data-hover="スペシャルイベント一覧">スペシャルイベント一覧</a></li>
                    <li><a href="/event/lp/" data-hover="イベント一覧">イベント一覧</a></li>
                    <li><a href="/event/archives/" data-hover="アーカイブ">アーカイブ</a></li>
                </ul>
            </li>
            <li><a href="/lp/how-to/" data-hover="HOW TO">HOW TO</a></li>
            <li><a href="/faq/" data-hover="FAQ">FAQ</a></li>
            <li><a target="_blank" href="http://livestyles.tv/aboutus" data-hover="ABOUT US">ABOUT US</a></li>
            <li class='c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button c-dropdown-head" data-hover="CONTACT"><span class="ic-arrow">CONTACT</span></a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/contact-corp/" data-hover="お問い合わせ（法人）">お問い合わせ（法人）</a></li>
                    <li><a href="/contact/" data-hover="お問い合わせ（個人）">お問い合わせ（個人）</a></li>
                </ul>
            </li>
        </ul>

    </nav>
    <nav class="visible-xs navbar-fixed-top">

        <ul id="slide-out" class="side-nav">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
            <li class='c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button c-dropdown-head">EVENT</a>
                <!-- Dropdown Structure -->
                <ul class='c-dropdown-body'>
                    <li><a href="/event/special/">スペシャルイベント一覧</a></li>
                    <li><a href="/event/lp/">イベント一覧</a></li>
                    <li><a href="/event/archives/">アーカイブ</a></li>
                </ul>
            </li>
            <li><a target="_blank" href="https://tixeebox.tv/lp/how-to/">HOW TO</a></li>
            <li><a href="/faq/">FAQ</a></li>
            <li><a target="_blank" href="http://livestyles.tv/aboutus">ABOUT US</a></li>
            <li class='c-dropdown'>
                <!-- Dropdown Trigger -->
                <a class="fn-dropdown-button c-dropdown-head">CONTACT</a>
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
    <?php if ( $cat_slug == 'special' ) { ?>
    <div class="c-parallax c-parallax--category1" id="fn-parallax-2">
    <?php } else if ( $cat_slug == 'lp' ) {?>
    <div class="c-parallax c-parallax--category2" id="fn-parallax-2">
    <?php } else if ( $cat_slug == 'archives' ) {?>
    <div class="c-parallax c-parallax--tag1" id="fn-parallax-2">
    <?php } else { ?>
    <div class="c-parallax c-parallax--category1" id="fn-parallax-2">
    <?php } ?>
        <div class="c-parallax-overlay"></div>
        <div class="c-parallax-content">

        </div>
    </div>

    <section class="container u-clearfix" id="fn-display-none">
        <h1 class="heading-category">
            <?php if ( have_posts() ) { echo $cat_name.'新着';} else { echo '投稿されていません。';} ?>
        </h1>
        <form class="c-search u-pull-right" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
            <div class="c-search-body">
                <input type="search" name="s" id="search" placeholder="検索" required>
                <label for="s"><i class="material-icons">search</i></label>
            </div>
        </form>
    </section>
    <section class="c-visualPanel">
        <div class="c-visualPanel-body">
            <div class="c-visualPanel-contant">
                <?php
                if ( have_posts() ) {
                $my_query = new WP_Query( 'posts_per_page=1&cat='.$cat_id);
                ?>
                <a href="<?php the_permalink();?>">
                    <div class="c-visualPanel-thumbnail c-visualPanel-thumbnail--one">
                        <?php while ( $my_query->have_posts() ) : $my_query->the_post();
                        $do_not_duplicate[] = $post->ID; ?>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                        <h1 class="c-visualPanel-heading">
                            <?php the_title(); ?>
                        </h1>
                        <?php endwhile;?>
                    </div>
                </a>
                <?php } ?>
            </div>
            <div class="c-visualPanel-contant">
                <?php
                if ( have_posts() ) {
                $my_query = new WP_Query( 'offset=1&posts_per_page=4&cat='.$cat_id);
                while ( $my_query->have_posts() ) : $my_query->the_post();
                $do_not_duplicate[] = $post->ID;
                ?>
                <div class="c-visualPanel-box">
                    <a href="<?php the_permalink();?>">
                        <div class="c-visualPanel-thumbnail">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('medium');
                            }
                            ?>
                            <h1 class="c-visualPanel-heading">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </a>
                </div>
                <?php endwhile; }?>
            </div>
        </div>
    </section>
    <?php if ( ($my_query->found_posts ) > 5 ){ ?>
    <div class="container">
        <div class="u-clearfix">
            <h1 class="heading-category"><?php echo $cat_name.'一覧'; ?></h1>
            <form id="fn-display" class="c-search u-pull-right" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <div class="c-search-body">
                    <input type="search" name="s" id="search" placeholder="検索" required>
                    <label for="s"><i class="material-icons">search</i></label>
                </div>
            </form>
        </div>
        <div class="row fn-grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                if ( in_array( $post->ID, $do_not_duplicate ) ) continue;?>
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
            <?php endwhile; endif; ?>
        </div>
        <?php
        wp_reset_postdata();
        ?>
        <div class="row">
            <?php if (function_exists('fn_pagenation')) {
                fn_pagenation($wp_query->max_num_pages);
            }?>
        </div>
    </div>
    <?php } ?>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/category.min.js"></script>
    </body>
</html>