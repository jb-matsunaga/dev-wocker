<?php get_header(); ?>
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

<?php
    //データをDBに登録
    $con = mysql_connect('127.0.0.1', 'wordpress', 'wordpress');
    if (!$con) {
        exit('データベースに接続できませんでした。');
    }

    $result = mysql_select_db('wordpress', $con);
    if (!$result) {
        exit('データベースを選択できませんでした。');
    }

    $result = mysql_query('SET NAMES utf8', $con);
    if (!$result) {
        exit('文字コードを指定できませんでした。');
    }

    $name_sei   = $_REQUEST['name_sei'];
    $name_mei = $_REQUEST['name_mei'];
    $email  = $_REQUEST['email'];
    $content  = $_REQUEST['content'];

    $result = mysql_query("INSERT INTO wp_contact(name_sei, name_mei, email, content) VALUES('$name_sei', '$name_mei', '$email', '$content')", $con);
    if (!$result) {
        exit('データを登録できませんでした。');
    }
    //管理者にお問い合わせを送信
    //管理者情報を取得
    $result = mysql_query('SELECT user_nicename,user_email FROM wp_users WHERE user_nicename = "tixeeboxadmin"');
    if (!$result) {
        die('クエリーが失敗しました。'.mysql_error());
    }
    while ($row = mysql_fetch_assoc($result)) {
        add_filter( 'wp_mail_content_type', 'set_html_content_type' );

        $to = $row['user_email'];
        $subject = 'tixeeboxお問い合わせ';
        $body = 'tixeeboxサイトからお問い合わせがありました。<br>
                 お名前（姓）：'.$name_sei.
                 '<br>お名前（名）：'.$name_mei.
                 '<br>メールアドレス：'.$email.
                 '<br>お問い合わせ内容：<br><p>'.$content.'</p>'; //本文
        $from = 'info-tixeebox@livestyles.tv'; //差出人

        $body = nl2br($body);

        if( wp_mail ($to,$subject,$body,$from));
    }
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
    <section class="row">
        <div class="col s12">
            <h1 class="heading-a u-mt30 u-mb30 u-text-center">お問い合わせ</h1>
            <p>お問い合わせ送信しました。</p>
        </div>
    </section>
    <div class="row u-pb60">
        <div class="col s12">
            <a class="btn btn-back waves-effect waves-light" href="contact/">戻る</a>
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