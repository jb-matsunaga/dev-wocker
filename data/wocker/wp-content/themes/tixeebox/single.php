<?php get_header(); ?>
        <?php
    //チケット受け取り方法説明
    $scheduleString = get_post_meta($post->ID, 'cf-scheduleString', true);
    $scheduleAlert = SCF::get( 'gp-scheduleAlert' );
    $alertSpecial = SCF::get( 'gp-alertSpecial' );
    //受け取りURL&QRコード
    $cf_tableTime = SCF::get( 'cf_tableTime' );
    //step受け取り
    $getString = get_post_meta($post->ID, 'cf-getString', true);
    $getTitle = get_post_meta($post->ID, 'cf-getTitle', true);
    $getAlert = SCF::get( 'gp-getAlert' );
    $getAlertCapture = SCF::get( 'gp-getAlertCapture' );
    $getCapture = SCF::get( 'gp-getCapture' );
    //stepチケットギフト
    $giftString = get_post_meta($post->ID, 'cf-giftString', true);
    $giftTitle = get_post_meta($post->ID, 'cf-giftTitle', true);
    $giftAlert = SCF::get( 'gp-giftAlert' );
    $giftAlertCapture = SCF::get( 'gp-giftAlertCapture' );
    $giftCapture = SCF::get( 'gp-giftCapture' );
    //入場方法：はじめに
    $enterFirstlyString = get_post_meta($post->ID, 'cf-enterFirstlyString', true);
    $enterFirstlyAlertDetail = get_post_meta($post->ID, 'cf-enterFirstlyAlertDetail', true);
    $gp_enterFirstlyAlert = SCF::get( 'gp-enterFirstlyAlert' );
    //入場方法：公演当日の入場方法
    $enterString = get_post_meta($post->ID, 'cf-enterString', true);
    $gp_enterAlert = SCF::get( 'gp-enterAlert' );
    $enterAlertDetail = get_post_meta($post->ID, 'cf-enterAlertDetail', true);
    $gp_enterAlertSpecial = SCF::get( 'gp-enterAlertSpecial' );
    $enterAlertSpecial = get_post_meta($post->ID, 'cf-enterAlertSpecial', true);
    //入場方法：キャプチャ
    $gp_enterCaptureAlert = SCF::get( 'gp-enterCaptureAlert' );
    $enterCaptureAlertDetail = get_post_meta($post->ID, 'cf-enterCaptureAlertDetail', true);
    $gp_enterCapture = SCF::get( 'gp-enterCapture' );
    $enterCaptureTitle = get_post_meta($post->ID, 'cf-enterCaptureTitle', true);
    $enterCaptureStringLong = get_post_meta($post->ID, 'cf-enterCaptureStringLong', true);
    $enterCaptureStringShort = get_post_meta($post->ID, 'cf-enterCaptureStringShort', true);
    //入場方法：ご持参いただくもの
    $gp_enterBringList = SCF::get( 'gp-enterBringList' );
    $enterBringList = get_post_meta($post->ID, 'cf-enterBringList', true);
    $gp_enterBringAlert = SCF::get( 'gp-enterBringAlert' );
    $enterBringAlert = get_post_meta($post->ID, 'cf-enterBringAlert', true);
    //お問い合わせ
    $contact_check = get_post_meta($post->ID, 'cf-contactCheck', true);
    $contact_title = get_post_meta($post->ID, 'cf-contactTitle', true);
    $contact_mail = get_post_meta($post->ID, 'cf-contactMail', true);
    $contact_tell = get_post_meta($post->ID, 'cf-contactTell', true);
    ?>
    <section class="navbar-fixed navbar-fixed--single">
        <h1 class="m-heading-fixedbar"><?php single_post_title(); ?> - tixeeboxスマホチケットご利用方法</h1>
        <nav>
            <div class="nav-wrapper">
                <a href="<?php bloginfo('url'); ?>" class="brand-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="tixeeboxロゴ">
                </a>
                <a href="#" data-activates="mobile-demo" class="m-btnCollapse">
                </a>
                <ul id="nav-mobile" class="m-hover m-hover--colorA right hide-on-med-and-down">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop" data-hover="TOP">TOP</a></li>
                    <?php if(empty($scheduleString)):?>
                    <?php else:?>
                    <li id="fn-navReceive" class="m-dropdown u-display-none">
                        <!-- Dropdown Trigger -->
                        <a class="fn-dropdown-button m-dropdown-head" data-hover="チケット受け取り方法">
                            <span class="ic-arrow">チケット受け取り方法</span>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul class="m-dropdown-body">
                            <li>
                                <a class="fn-pageScroll" href="#link-schedule" data-hover="各公演日程とチケット受け取り開始日程">
                                    各公演日程とチケット受け取り開始日程
                                </a>
                            </li>
                            <?php if(empty($getString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-receive" data-hover="tixeeboxアプリによるチケットの受け取り方法">
                                    tixeeboxアプリによるチケットの受け取り方法
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(empty($giftString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-gift" data-hover="同伴者様へのチケットのギフト(分配)方法">
                                    同伴者様へのチケットのギフト(分配)方法
                                </a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </li>
                    <?php endif;?>
                    <?php if(empty($enterFirstlyString)):?>
                    <?php else:?>
                    <li class="m-dropdown u-display-none">
                        <!-- Dropdown Trigger -->
                        <a class="fn-dropdown-button m-dropdown-head" data-hover="入場方法">
                            <span class="ic-arrow">入場方法</span>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul class="m-dropdown-body">
                            <li>
                                <a class="fn-pageScroll" href="#link-firstly" data-hover="はじめに">
                                    はじめに
                                </a>
                            </li>
                            <?php if(empty($enterString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-enter" data-hover="公演当日の入場方法">
                                    公演当日の入場方法
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(empty($enterBringList)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-bring" data-hover="ご入場の際にご持参いただくもの">
                                    ご入場の際にご持参いただくもの
                                </a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </li>
                    <?php endif;?>
                    <li><a href="/faq/" target="_blank">FAQ</a></li>
                    <?php if( $contact_check == 'ON' ) :?>
                    <li id="fn-navContact" class="u-display-none">
                        <a class="fn-pageScroll" href="#link-contact" data-hover="お問い合わせ">お問い合わせ</a>
                    </li>
                    <?php endif;?>
                    <li><a href="https://tixeebox.tv/lp/how-to/" target="_blank" data-hover="tixeebox使用方法">tixeebox使用方法</a></li>

                </ul>
                <!-- スマホ：サイドメニュー -->
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop">TOP</a></li>
                    <?php if(empty($scheduleString)):?>
                    <?php else:?>
                    <li id="fn-navReceive" class="m-dropdown u-display-none">
                        <!-- Dropdown Trigger -->
                        <a class="fn-dropdown-button m-dropdown-head">
                            <span class="ic-arrow">チケット受け取り方法</span>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul class="m-dropdown-body">
                            <li>
                                <a class="fn-pageScroll" href="#link-schedule">
                                    受け取り開始日程
                                </a>
                            </li>
                            <?php if(empty($getString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-receive">
                                    受け取り方法
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(empty($giftString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-gift">
                                    ギフト(分配)方法
                                </a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </li>
                    <?php endif;?>
                    <?php if(empty($enterFirstlyString)):?>
                    <?php else:?>
                    <li class="m-dropdown u-display-none">
                        <!-- Dropdown Trigger -->
                        <a class="fn-dropdown-button m-dropdown-head" data-hover="入場方法">
                            <span class="ic-arrow">入場方法</span>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul class="m-dropdown-body">
                            <li>
                                <a class="fn-pageScroll" href="#link-firstly" data-hover="はじめに">
                                    はじめに
                                </a>
                            </li>
                            <?php if(empty($enterString)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-enter" data-hover="公演当日の入場方法">
                                    公演当日の入場方法
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(empty($enterBringList)):?>
                            <?php else:?>
                            <li>
                                <a class="fn-pageScroll" href="#link-bring" data-hover="ご入場の際にご持参いただくもの">
                                    ご持参いただくもの
                                </a>
                            </li>
                            <?php endif;?>
                        </ul>
                    </li>
                    <?php endif;?>
                    <?php if( $contact_check == 'ON' ) :?>
                    <li id="fn-navContact">
                        <a class="fn-pageScroll" href="#link-contact">お問い合わせ</a>
                    </li>
                    <?php endif;?>
                    <li>
                        <a class="icon-linkblank" href="https://tixeebox.tv/lp/how-to/" target="_blank">tixeebox使用方法</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="m-panelOne">
                <div class="m-panelOne_body">
                    <?php echo wp_get_attachment_image(post_custom('cf_keyVisual'),'full'); ?>
                </div>
            </div>
    <?php endwhile; endif; ?>

    <div class="container u-pb60">
        <div class="row u-mt20">
            <div class="col s12">
            <?php
            $keyBtnUrl = get_post_meta($post->ID, 'cf-keyBtnUrl', true);
            $keyBtnTxt = get_post_meta($post->ID, 'cf-keyBtnTxt', true);
            ?>
            <?php if(empty($keyBtnUrl)):?>
            <?php else:?>
                <a class="btn btn-special waves-effect waves-light btn-large u-center-block" href="<?php echo $keyBtnUrl; ?>" target="_blank">
                    <?php echo $keyBtnTxt; ?>
                </a>
            <?php endif;?>
            </div>
        </div>
        <?php $ctm_alert = get_post_meta($post->ID, 'cf_alertStrings', true);?>
        <?php if(empty($ctm_alert)):?>
        <?php else:?>
            <div class="m-alert u-text-center u-mb30">
                <?php echo nl2br($ctm_alert); ?>
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
        <!-- チケット受け取り方法 -->
                        <?php $ctm_getTicket = get_post_meta($post->ID, 'cf_tableGetTicket_title', true);?>
                <?php if(empty($ctm_getTicket)):?>
                <?php else:?>
                    <section class="card">
                        <div class="row card-content">
                            <h1 class="m-heading-main">チケット受け取り方法</h1>
                            <section class="col s12">
                                <h3 id="link-schedule" class="m-heading-sub">各公演日程とチケット受け取り開始日程</h3>
                                <p><?php echo nl2br($scheduleString); ?></p>
                                <ul class="m-alert m-alert-list u-mt15">
                                    <?php foreach ( $scheduleAlert as $field_name => $field_value ) { ?>
                                    <li>
                                        <?php echo nl2br($field_value['cf-scheduleAlertDetail']); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="m-alert m-alert-box u-mt30 u-mb30">
                                    <ul class="m-alert-list">
                                        <?php foreach ( $alertSpecial as $field_name => $field_value ) { ?>
                                        <li>
                                            <?php echo nl2br($field_value['cf-alertSpecial']); ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                                            <section>
                            <?php $tableTimeTitle = get_post_meta($post->ID, 'cf-tableTime-title', true); ?>
                                <table class="table m-table-time m-table-bordered m-table-url u-mb30">
                                    <thead>
                                        <tr>
                                            <th>日程</th>
                                            <th>開場/開演</th>
                                            <th class="tb-place">会場</th>
                                            <th>受取開始</th>
                                            <th>
                                                <a class="btn btn-primary btn-xs" href="javascript:location.reload(true);">更新</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="getticket_area">
                                    <?php
                                    foreach ( $cf_tableTime as $field_name => $field_value ) { 
                                    ?>
                                        <tr>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-schedule'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-open'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-venue'] ); ?></td>
                                            <td><?php echo esc_html( $field_value['cf-tableTime-getTicketDay'] ); ?></td>
                                            <td><a class="btn btn-action waves-effect waves-light white-text u-mr0 fn-getTicketBtn">受け取る</a></td>
                                        </tr>
                                        <tr class="fn-getTicket u-display-none">
                                            <td colspan="5">
                                                <table class="table m-table-url m-table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>端末</th>
                                                            <th>イベント</th>
                                                            <th>受け取りボタン / QRコード</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>iPhone</th>
                                                            <th width="10%">公演</th>
                                                            <td class="bg-color-b">
                                                                <a class="btn btn-action waves-effect waves-light white-text u-mr0" href="<?php echo esc_html( $field_value['cf-getiphoneUrl'] ); ?>" target="_blank">
                                                                iPhoneで受け取る
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Android</th>
                                                            <th>公演</th>
                                                            <td class="bg-color-b">
                                                                <a class="btn btn-action waves-effect waves-light white-text u-mr0" href="<?php echo esc_html( $field_value['cf-getandroidUrl'] ); ?>" target="_blank">
                                                                Androidで受け取る
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>tixeebox<br>『QRコードリーダー』</th>
                                                            <th>公演</th>
                                                            <td class="bg-color-b">
                                                                <?php echo wp_get_attachment_image($field_value['cf-getQrcode'], 'thumbnail'); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </section>
                            </section>

                            <?php if(empty($getCapture)):?>
<?php else:?>
<section class="col s12 u-mb50">
    <div class="u-mb50">
        <h1 id="link-receive" class="m-heading-sub u-pt30">tixeeboxアプリによるチケットの受け取り方法</h1>
        <p>
            <?php echo nl2br($getString); ?>
        </p>
        <p>
            <a class="page-scroll m-linkDetail" href="https://tixeebox.tv/lp/how-to/#section01" target="_blank">
                インストール・利用登録についてはこちら
            </a>
        </p>
    </div>

    <!-- 注意文言 -->
    <?php if(empty($field_value['cf-getAlert'])):?>
    <?php else:?>
        <ul class="m-alert m-alert-list u-mt30">
            <?php foreach ( $getAlert as $field_name => $field_value ) { ?>
            <li>
                <?php echo nl2br($field_value['cf-getAlert']); ?>
            </li>
            <?php } ?>
        </ul>
    <?php endif;?>

    <!-- キャプチャー枠タイトル -->
    <?php if(empty($getTitle)):?>
    <?php else:?>
        <strong><?php echo nl2br($getTitle); ?></strong>
    <?php endif;?>

    <!-- キャプチャー枠注意文言 -->
    <?php if(empty($field_value['cf-getAlertCapture'])):?>
    <?php else:?>
        <ul class="m-alert m-alert-list u-mt0">
            <?php foreach ( $getAlertCapture as $field_name => $field_value ) { ?>
            <li>
                <?php echo nl2br($field_value['cf-getAlertCapture']); ?>
            </li>
            <?php } ?>
        </ul>
    <?php endif;?>

    <!-- キャプチャー説明リスト -->
    <ol class="m-listSteps u-hidden-xs">
        <?php foreach ( $getCapture as $field_name => $field_value ) { ?>
        <li><?php echo nl2br($field_value['cf-captureStringLong']); ?></li>
        <?php } ?>
    </ol>

    <!-- キャプチャー説明 -->
    <div class="row l-step">
        <?php foreach ( $getCapture as $field_name => $field_value ) { ?>
        <div class="col m3 s12">
            <div class="card card-step fn-step">
                <span class="card-number"><?php echo nl2br($field_value['cf-captureNumber']); ?>.</span>
                <div class="card-content">
                    <p class="u-hidden-xs"><?php echo nl2br($field_value['cf-captureStringShort']); ?></p>
                    <p class="u-visible-xs"><?php echo nl2br($field_value['cf-captureStringLong']); ?></p>
                </div>
                <div class="card-image fn-stepContent">
                    <?php echo wp_get_attachment_image($field_value['cf-captureImage'], 'medium'); ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php endif;?>

                            <?php if(empty($giftString)):?>
<?php else:?>
    <section class="col s12 u-mb60">
        <div class="u-mb50">
            <h1 id="link-gift" class="m-heading-sub u-pt30">同伴者様へのチケットのギフト(分配)方法</h1>
            <p>
                <?php echo nl2br($giftString); ?>
            </p>
        </div>

        <!-- 注意文言 -->
        <?php if(empty($field_value['cf-giftAlert'])):?>
        <?php else:?>
            <ul class="m-alert m-alert-list u-mt30">
                <?php foreach ( $giftAlert as $field_name => $field_value ) { ?>
                <li>
                    <?php echo nl2br($field_value['cf-giftAlert']); ?>
                </li>
                <?php } ?>
            </ul>
        <?php endif;?>

        <!-- キャプチャー枠タイトル -->
        <?php if(empty($giftTitle)):?>
        <?php else:?>
        <strong><?php echo nl2br($giftTitle); ?></strong>
        <?php endif;?>

        <!-- キャプチャー枠注意文言 -->
        <?php if(empty($field_value['cf-giftAlertCapture'])):?>
        <?php else:?>
            <ul class="m-alert m-alert-list u-mt0">
                <?php foreach ( $giftAlertCapture as $field_name => $field_value ) { ?>
                <li>
                    <?php echo nl2br($field_value['cf-giftAlertCapture']); ?>
                </li>
                <?php } ?>
            </ul>
        <?php endif;?>

        <!-- キャプチャー説明リスト -->
        <ol class="m-listSteps u-hidden-xs">
            <?php foreach ( $giftCapture as $field_name => $field_value ) { ?>
            <li><?php echo nl2br($field_value['cf-captureGiftLong']); ?></li>
            <?php } ?>
        </ol>

        <!-- キャプチャー説明 -->
        <div class="row l-step">
            <?php foreach ( $giftCapture as $field_name => $field_value ) { ?>
            <div class="col m3 s12">
                <div class="card card-step fn-step">
                    <span class="card-number"><?php echo nl2br($field_value['cf-captureGiftNum']); ?>.</span>
                    <div class="card-content">
                        <p class="u-hidden-xs"><?php echo nl2br($field_value['cf-captureGiftShort']); ?></p>
                        <p class="u-visible-xs"><?php echo nl2br($field_value['cf-captureGiftLong']); ?></p>
                    </div>
                    <div class="card-image fn-stepContent">
                        <?php echo wp_get_attachment_image($field_value['cf-captureGiftImage'], 'medium'); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
<?php endif;?>
                        </div>
                    </section>
                <?php endif;?>

        <!-- 入場方法 -->
                        <?php if(empty($enterFirstlyString)):?>
                <?php else:?>
                    <section class="card">
                        <div class="row card-content">
                            <h1 class="m-heading-main">入場方法</h1>
                            <!-- はじめに -->
                            <section class="col s12 u-mb60">
                                <h1 id="link-firstly" class="m-heading-sub">はじめに</h1>
                                <!-- 説明 -->
                                <p><?php echo nl2br($enterFirstlyString); ?></p>
                                <!-- 注意文言 -->
                                <?php if(empty($enterFirstlyAlertDetail)):?>
                                <?php else:?>
                                <ul class="m-alert m-alert-list u-mt15">
                                    <?php foreach ( $gp_enterFirstlyAlert as $field_name => $field_value ) { ?>
                                    <li>
                                        <?php echo nl2br($field_value['cf-enterFirstlyAlertDetail']); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php endif;?>
                                <!-- リンク -->
                                <p>
                                    <a class="m-linkDetail" href="https://tixeebox.tv/lp/how-to/#section01" target="_blank">
                                        インストール・利用登録についてはこちら
                                    </a><br>
                                    <a class="fn-pageScroll m-linkDetail" href="#link-receive">
                                        チケットの受け取りについてはこちら
                                    </a>
                                </p>
                            </section>
                            <!-- 公演当日の入場方法 -->
                            <?php if(empty($enterString)):?>
                            <?php else:?>
                            <section class="col s12 u-mb60">
                                <h1 id="link-enter" class="m-heading-sub">公演当日の入場方法</h1>
                                <p><?php echo nl2br($enterString); ?></p>
                                <!-- 注意文言 -->
                                <?php if(empty($enterAlertDetail)):?>
                                <?php else:?>
                                <ul class="m-alert m-alert-list u-mt15">
                                    <?php foreach ( $gp_enterAlert as $field_name => $field_value ) { ?>
                                    <li>
                                        <?php echo nl2br($field_value['cf-enterAlertDetail']); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php endif;?>
                                <!-- スペシャル注意文言 -->
                                <?php if(empty($enterAlertSpecial)):?>
                                <?php else:?>
                                <div class="m-alert m-alert-box u-mt30 u-mb30">
                                    <ul class="m-alert-list">
                                        <?php foreach ( $gp_enterAlertSpecial as $field_name => $field_value ) { ?>
                                        <li>
                                            <?php echo nl2br($field_value['cf-enterAlertSpecial']); ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php endif;?>
                                <!-- キャプチャ入場方法 -->
                                <?php if(empty($enterCaptureStringLong)):?>
                                <?php else:?>
                                            <!-- キャプチャー枠タイトル -->
        <?php if(empty($enterCaptureTitle)):?>
        <?php else:?>
        <strong><?php echo nl2br($enterCaptureTitle); ?></strong>
        <?php endif;?>

        <!-- キャプチャー枠注意文言 -->
        <?php if(empty($enterCaptureAlertDetail)):?>
        <?php else:?>
            <ul class="m-alert m-alert-list u-mt0">
                <?php foreach ( $gp_enterCaptureAlert as $field_name => $field_value ) { ?>
                <li>
                    <?php echo nl2br($field_value['cf-enterCaptureAlertDetail']); ?>
                </li>
                <?php } ?>
            </ul>
        <?php endif;?>

        <!-- キャプチャー説明リスト -->
        <ol class="m-listSteps u-hidden-xs">
            <?php foreach ( $gp_enterCapture as $field_name => $field_value ) { ?>
            <li><?php echo nl2br($field_value['cf-enterCaptureStringLong']); ?></li>
            <?php } ?>
        </ol>

        <!-- キャプチャー説明 -->
        <div class="row l-step">
            <?php foreach ( $gp_enterCapture as $field_name => $field_value ) { ?>
            <div class="col m3 s12">
                <div class="card card-step fn-step">
                    <span class="card-number"><?php echo nl2br($field_value['cf-enterCaptureNumber']); ?>.</span>
                    <div class="card-content">
                        <p class="u-hidden-xs"><?php echo nl2br($field_value['cf-enterCaptureStringShort']); ?></p>
                        <p class="u-visible-xs"><?php echo nl2br($field_value['cf-enterCaptureStringLong']); ?></p>
                    </div>
                    <div class="card-image fn-stepContent">
                        <?php echo wp_get_attachment_image($field_value['cf-enterCaptureImage'], 'medium'); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
                                <?php endif;?>
                            </section>
                            <?php endif;?>
                            <!-- ご入場の際にご持参いただくもの -->
                            <?php if(empty($enterBringList)):?>
                            <?php else:?>
                            <section class="col s12 u-mb60">
                                <h1 id="link-bring" class="m-heading-sub">ご入場の際にご持参いただくもの</h1>
                                <!-- 持ち物リスト -->
                                <ol class="list-b">
                                    <?php foreach ( $gp_enterBringList as $field_name => $field_value ) { ?>
                                    <li><?php echo nl2br($field_value['cf-enterBringList']); ?></li>
                                    <?php } ?>
                                </ol>
                                <!-- 注意文言 -->
                                <?php if(empty($enterBringAlert)):?>
                                <?php else:?>
                                <ul class="m-alert m-alert-list u-mt15">
                                    <?php foreach ( $gp_enterBringAlert as $field_name => $field_value ) { ?>
                                    <li>
                                        <?php echo nl2br($field_value['cf-enterBringAlert']); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php endif;?>
                            </section>
                            <?php endif;?>
                        </div>
                    </section>
                <?php endif;?>

        <!-- お問い合わせ -->
                        <?php if( $contact_check == 'ON' ) {?>
                    <section id="link-contact" class="card">
                        <div class="card-content">
                            <h1 class="m-heading-sub">tixeeboxに関するお問い合わせ</h1>
                            <p>
                                tixeeboxサービスのご利用についてのお問い合わせは電話またはメールにて受け付けております。<br>以下の電話番号またはメールアドレスへご連絡ください。
                            </p>
                        </div>
                        <div class="card-action u-pt0">
                                    <section class="m-contact">
            <div class="m-contact-head">
                <h1><?php echo $contact_title; ?></h1>
            </div>
            <div class="m-contact-body">
                <ul>
                    <li class="m-contact-info m-contact-info--mail">
                        <h2>メールでのお問い合わせ</h2>
                        <?php ?>
                            <?php echo '<a href="mailto:'.$contact_mail.'">'?>
                            <?php echo $contact_mail; ?>
                        </a>
                    </li>
                    <li class="m-contact-info m-contact-info--tell">
                        <h2>お電話でのお問い合わせ</h2>
                        <?php echo '<a href="tel:'.$contact_tell.'">' ?>
                            <?php echo $contact_tell; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

                        </div>
                    </section>
                <?php };?>
    </div><!--end container-->
    <div class="m-breadcrumb">
    <?php breadcrumb(); ?>
    </div>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/single.min.js"></script>
    <script>
        $(document).ready(function(){
            $('body').addClass('page-single');
        });
    </script>
    <?php
    $style_bgcolor = get_post_meta($post->ID, 'cf-backgroundColor', true);
    ?>
                <?php if(empty($style_bgcolor)):?>

                <?php else:?>
                    <script>
                        $('body').css('background', '<?php echo $style_bgcolor;?>');
                    </script>
                <?php endif;?>
    </body>
</html>
