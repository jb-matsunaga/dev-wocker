<?php get_header(); ?>
<!-- カテゴリ情報取得 -->
<?php
if ( have_posts() ) {
    $tags = get_the_tags();
    $tag_id   = $tags[0]->term_id;
    $tag_name = $tags[0]->slug;
}
?>
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
    <section class="container">
            <h1 class="heading-category"><?php if ( have_posts() ) { echo single_tag_title( ).'新着';} else { echo '投稿されていません。';} ?></h1>
    </section>
    <section class="c-visualPanel">
        <div class="c-visualPanel-body">
            <div class="c-visualPanel-contant">
                <?php
                if ( have_posts() ) {
                $tag_query = new WP_Query( 'posts_per_page=1&tag_id='.$tag_id);
                ?>
                <a href="<?php the_permalink();?>">
                    <div class="c-visualPanel-thumbnail c-visualPanel-thumbnail--one">
                        <?php while ( $tag_query->have_posts() ) : $tag_query->the_post();
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
                $tag_query = new WP_Query( 'offset=1&posts_per_page=4&tag_id='.$tag_id);
                while ( $tag_query->have_posts() ) : $tag_query->the_post();
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
    <?php if ( ($tag_query->found_posts ) > 4 ){ ?>
    <div class="container">
        <h1 class="heading-category"><?php echo single_tag_title().'一覧'; ?></h1>
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
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/category.min.js"></script>
    </body>
</html>