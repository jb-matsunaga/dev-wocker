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

<?php
    //wp_optionsから取得
    $contact_database_ip = get_option( 'contact_options' )['database_ip'];
    $contact_database_user = get_option( 'contact_options' )['database_user'];
    $contact_database_pass = get_option( 'contact_options' )['database_pass'];
    $contact_database_name = get_option( 'contact_options' )['database_name'];
    //データベースに接続
    $con = mysql_connect($contact_database_ip, $contact_database_user, $contact_database_pass);
    if (!$con) {
        exit('データベースに接続できませんでした。');
    }
    $result = mysql_select_db($contact_database_name, $con);
    if (!$result) {
        exit('データベースを選択できませんでした。');
    }
    $result = mysql_query('SET NAMES utf8', $con);
    if (!$result) {
        exit('文字コードを指定できませんでした。');
    }
    //フォームから取得
    $name_sei   = $_POST['name_sei'];
    $name_mei = $_POST['name_mei'];
    $email  = $_POST['email'];
    $content  = $_POST['content'];
    //データをDBに登録
    $result = mysql_query (
        "INSERT INTO wp_contact(
            name_sei,
            name_mei,
            email,
            content
        )
        VALUES(
            '$name_sei',
            '$name_mei',
            '$email',
            '$content'
        )",
        $con
    );
    if (!$result) {
        exit('データを登録できませんでした。');
    }
    //管理者にお問い合わせを送信
    //wp_optionsから取得
    //Option:WP Mail SMTPプラグイン[Username]で設定する
    $contact_receipt_mail = get_option( 'smtp_user' );
    add_filter( 'wp_mail_content_type', 'set_html_content_type' );

    $to = $contact_receipt_mail;
    $subject = 'tixeeboxお問い合わせ';
    $body = 'tixeeboxサイトからお問い合わせがありました。<br>
             お名前（姓）：'.$name_sei.
             '<br>お名前（名）：'.$name_mei.
             '<br>メールアドレス：'.$email.
             '<br>お問い合わせ内容：<br><p>'.$content.'</p>
             <p>
             ---------------------------------------------<br>
             <strong>tixeebox</strong>
             <a href="https://tixeebox.tv/" target="_blank">https://tixeebox.tv/</a> <br>
             ---------------------------------------------
             </p>'; //本文
    $body = nl2br($body);//改行

    wp_mail ($to, $subject, $body);//メール送信
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

    function set_html_content_type() {
        return 'text/html';
    }

    $con = mysql_close($con);
    if (!$con) {
        exit('データベースとの接続を閉じられませんでした。');
    }

?>
<div class="container">
    <div class="row u-mt60 u-mb60">
        <div class="col s12">
            <section class="card">
                <section class="card-content">
                    <h1 class="m-heading-sub">お問い合わせ完了</h1>
                    <p class="u-pt30 u-pb30 u-pl10 u-pr10">
                        tixeebox事務局から3営業日以内にご回答させていただきます。<br>
                        なお、tixeebox事務局からのご連絡は「<?php echo $contact_receipt_mail; ?>」から届きます。<br>
                        迷惑メール受信拒否設定によっては、本サイトからのお知らせメールが届かない場合がございます。<br>
                        お手数ですが「<?php echo $contact_receipt_mail; ?>」の受信拒否設定を解除して下さい。
                    </p>
                </section>
                <div class="card-action">
                    <button type="button" class="btn btn-back waves-effect waves-light" onclick="location.href='contact/'">戻る</button>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/contact.min.js"></script>
    <script>
        $(document).ready(function(){
            $('body').addClass('page-single');
        });
    </script>
    </body>
</html>