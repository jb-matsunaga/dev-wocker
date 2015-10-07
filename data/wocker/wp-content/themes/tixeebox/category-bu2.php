<?php get_header(); ?>
<!-- カテゴリ情報取得 -->
<?php
    $category = get_the_category();
    $cat_id   = $category[0]->cat_ID;
    $cat_name = $category[0]->cat_name;
?>
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
    <section class="container">
            <h1 class="heading-category"><?php echo $cat_name; ?></h1>
    </section>
    <?php
    $postslist = get_posts('category='.$cat_id.'&orderby=post_date&order=DESC&paged='.$paged);
    ?>
    <section class="c-visualPanel u-mb50">
        <div class="c-visualPanel-body">
            <div class="c-visualPanel-contant">
                <a href="<?php the_permalink();?>">
                    <div class="c-visualPanel-thumbnail c-visualPanel-thumbnail--one">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                        <h1 class="c-visualPanel-heading">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </a>
            </div>
            <div class="c-visualPanel-contant">
                <!-- 2番目から取得 -->
                <?php $postslist = get_posts('offset=1'); ?>
                <!-- 4回ループする -->
                <?php foreach (array_slice($postslist, 0, 4) as $post) : setup_postdata($post); ?>
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="container">
        
        <div class="row fn-grid">
            <!-- 6番目から取得 -->
            <?php $postslist = get_posts('offset=5'); ?>
            <?php foreach ($postslist as $post) : setup_postdata($post); ?>
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
            <?php endforeach; ?>
        </div>
    <?php wp_reset_postdata(); ?>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/category.min.js"></script>
    </body>
</html>
