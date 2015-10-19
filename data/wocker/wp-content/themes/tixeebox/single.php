<?php get_header(); ?>
        <section class="navbar-fixed">
        <h1 class="heading-d"><?php single_post_title(); ?> - tixeeboxスマホチケットご利用方法</h1>
        <nav>
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

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="c-mainPanel">
                <div class="c-mainPanel_body">
                    <?php echo wp_get_attachment_image(post_custom('cf_keyVisual'),'full'); ?>
                </div>
            </div>
    <?php endwhile; endif; ?>

    <div class="container">
        <div class="row u-mt40">
            <div class="col s12">
            <?php $ctm_linkspecial = get_post_meta($post->ID, 'cf_linkSpecialLP', true);?>
            <?php if(empty($ctm_linkspecial)):?>
                <a class="btn waves-effect waves-light btn-large u-center-block" href="https://tixeebox.tv/lp/how-to/" target="_blank">
                    tixeeboxご利用方法をみる
                </a>
            <?php else:?>
                <a class="btn btn-special waves-effect waves-light btn-large u-center-block" href="<?php echo get_post_meta($post->ID , 'cf_linkSpecialLP' ,true); ?>" target="_blank">
                    特設ランディングページをみる
                </a>
            <?php endif;?>
            </div>
        </div>
        <?php $ctm_alert = get_post_meta($post->ID, 'cf_alertStrings', true);?>
        <?php if(empty($ctm_alert)):?>
        <?php else:?>
            <div class="alert u-text-center u-mb10">
                <?php echo get_post_meta($post->ID , 'cf_alertStrings' ,true); ?>
            </div>
        <?php endif;?>
        <!-- 投稿部分 -->
        <?php
        if(empty($post->post_content)){
           /* 本文が空の場合の処理 */ 
        } else {
        echo '<section id="#link-receive">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">' 
                                .get_the_content(). 
                                '</div>
                            </div>
                        </div>
                    </div>
                </setion>';
        }
        ?>
        <!-- 公演日程とチケット受け取り開始日時 -->
                        <?php $ctm_schedule = get_post_meta($post->ID, 'cf-tableTime-title', true);?>
                <?php if(empty($ctm_schedule)):?>

                <?php else:?>
                    <section id="link-schedule">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h1 class="heading-a">公演日程とチケット受け取り開始日時</h1>
                                        <p>
                                        <span class="alert alert-a">チケットの受け取りは、下記表の「受け取り開始」に記載してある日時から開始となります。</span><br>
                                            公演当日はアクセスの集中により回線の混雑が予想されます。必ず事前にtixeeboxアプリのインストールおよびチケットの受け取りを完了してください。
                                        </p>
                                        <p>
                                            <a class="page-scroll link-a" href="https://tixeebox.tv/lp/how-to/#section02" target="_blank">tixeeboxアプリによるチケットの受け取り方法詳細はこちら</a>
                                        </p>
                                    </div>
                                    <div class="card-action">
                                                                    <section>
                            <?php
                            $cf_tableTime = SCF::get( 'cf_tableTime' );
                            foreach ( $cf_tableTime as $field_name => $field_value ) {
                            ?>
                                <h1 class="heading-b"><?php echo esc_html( $field_value['cf-tableTime-title'] ); ?></h1>
                                <table class="table table-time table-bordered table-url">
                                    <thead>
                                        <tr>
                                            <th>日程</th>
                                            <th>開場/開演</th>
                                            <th class="tb-place">会場</th>
                                            <th>受け取り開始</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-schedule'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-open'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-venue'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-getTicketDay'] ); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </table>
                            <?php } ?>
                            </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif;?>
        <!-- チケット受け取り方法 -->
                        <?php $ctm_getTicket = get_post_meta($post->ID, 'cf_tableGetTicket_title', true);?>
                <?php if(empty($ctm_getTicket)):?>

                <?php else:?>
                    <section id="link-receive">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h1 class="heading-a">チケット受け取り方法</h1>
                                        <p>
                                            tixeeboxスマートフォンアプリをインストールし、利用登録完了後にチケットの受け取りが可能となります。
                                        </p>
                                        <p>
                                            <a class="page-scroll link-a" href="https://tixeebox.tv/lp/how-to/#section01_a" target="_blank">インストール・利用登録詳細はこちら</a>
                                        </p>
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action-string">
                                            <p>
                                                下記URLを選択もしくは、QRコードをtixeeboxアプリで読み込むとチケットがお受取りいただけます。
                                            </p>
                                            <span class="alert">
                                                ※URLを選択する前にtixeeboxアプリのインストール・利用登録をお願いします。<br>
                                                ※チケット取得のためにパスワードを求められる場合がございます。各主催からご案内しているパスワード二つを入力し、チケットを取得してください。
                                            </span>
                                        </div>
                                        <section class="col-md-12 u-mb30 u-mt60">
                                            
<?php
    $cf_tableTicket = SCF::get( 'cf_tableGetTicket' );
    foreach ( $cf_tableTicket as $field_name => $field_value ) {
  ?>
    <h1 class="heading-b"><?php echo esc_html( $field_value['cf_tableGetTicket_title'] ); ?></h1>
    <table class="table table-url table-bordered">
        <thead>
            <tr>
                <th>端末</th>
                <th>イベント</th>
                <th>受け取りURL / QRコード</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>iPhone</th>
                <th width="10%">公演</th>
                <td class="bg-color-b">
                    <a href="<?php echo esc_html( $field_value['cf_tableGetTicket_urlIphone'] ); ?>" target="_blank">
                    <?php echo esc_html( $field_value['cf_tableGetTicket_urlIphone'] ); ?>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Android</th>
                <th>公演</th>
                <td class="bg-color-b">
                    <a href="<?php echo esc_html( $field_value['cf_tableGetTicket_urlAndroid'] ); ?>" target="_blank">
                    <?php echo esc_html( $field_value['cf_tableGetTicket_urlAndroid'] ); ?>
                    </a>
                </td>
            </tr>
            <tr>
                <th>PC</th>
                <th>公演</th>
                <td class="bg-color-b">
                    <?php
                    $image = get_post_meta($post->ID, 'cf_tableGetTicket_qrcode', true);
                    echo wp_get_attachment_image($image, 'thumbnail');
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif;?>

        <!-- お問い合わせ -->
                        <?php if(empty($ctm_linkspecial)):?>
                    <section id="link-contact" class="card">
                        <div class="card-content">
                            <h1 class="heading-a">お問い合わせ</h1>
                            <p>
                                tixeeboxサービスのご利用についてのお問い合わせは電話またはメールにて受け付けております。<br>以下の電話番号またはメールアドレスへご連絡ください。
                            </p>
                        </div>
                        <div class="card-action u-pt0">
                                    <section class="c-contact">
                <div class="c-contact-head">
                    <h1>tixeeboxに関するお問い合わせ</h1>
                </div>
                <div class="c-contact-body">
                    <ul>
                        <li class="c-contact-info c-contact-info--mail">
                            <h2>メールでのお問い合わせ</h2>
                            <a href="mailto:info-tixeebox@livestyles.tv">
                                info-tixeebox@livestyles.tv
                            </a>
                        </li>
                        <li class="c-contact-info c-contact-info--tell">
                            <h2>お電話でのお問い合わせ</h2>
                            <a href="tel:03-4590-7632">
                                03-4590-7632
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
                        </div>
                    </section>
                <?php else:?>
                
                <?php endif;?>
    </div><!--end container-->
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/single.min.js"></script>
    <script>
        $(document).ready(function(){
            $('body').addClass('page-single');
        });
    </script>
    </body>
</html>
