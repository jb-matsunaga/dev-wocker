<?php
/*
Plugin Name: Show Text
Plugin URI: http://www.example.com/plugin
Description: テキストを表示するだけのプラグイン
Author: my name
Version: 0.1
Author URI: http://www.example.com
*/

class ShowText {
    function __construct() { //インスタンス化するときに実行されるメソッド
      add_action('admin_menu', array($this, 'add_pages'));
    }
    function add_pages() {
      add_menu_page('お問い合わせ管理','お問い合わせ管理',  'level_8', __FILE__, array($this,'contact_admin_page'), '', 26);
    }
    function contact_admin_page() {
//$_POST['showtext_options'])があったら保存
        if ( isset($_POST['showtext_options'])) {
            check_admin_referer('shoptions');
            $opt = $_POST['showtext_options'];
            update_option('showtext_options', $opt);
            ?>
            <div class="updated fade"><p><strong><?php _e('Options saved.'); ?></strong></p></div>

        <?php
        }
        ?>

        <div class="wrap">
            <div id="icon-options-general" class="icon32"><br /></div><h2>お問い合わせ管理</h2>
            <form action="" method="post">
                <?php
                wp_nonce_field('shoptions');
                $opt = get_option('showtext_options');
                $show_text = isset($opt['text']) ? $opt['text']: null;
                ?> 
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><label for="inputtext">テキスト</label></th>
                        <td><input name="showtext_options[text]" type="text" id="inputtext" value="<?php  echo $show_text ?>" class="regular-text" /></td>
                    </tr>
                </table>
                <p class="submit"><input type="submit" name="Submit" class="button-primary" value="変更を保存" /></p>
            </form>
            <!-- /.wrap --></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>お名前（姓）</th>
                        <th>お名前（名）</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせ内容</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            //DB接続
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
            $result = mysql_query('SELECT id,name_sei,name_mei,email,content FROM wp_contact');
            if (!$result) {
                die('クエリーが失敗しました。'.mysql_error());
            }
            while ($row = mysql_fetch_assoc($result)) {

                $contact_id = $row['id'];
                $contact_name_sei = $row['name_sei'];
                $contact_name_mei = $row['name_mei'];
                $contact_email = $row['email'];
                $contact_contact = $row['content'];
            ?>
                    <tr>
                        <td><?php echo $contact_id ?></td>
                        <td><?php echo $contact_name_sei ?></td>
                        <td><?php echo $contact_name_mei ?></td>
                        <td><?php echo $contact_email ?></td>
                        <td><?php echo $contact_contact ?></td>
                    </tr>
            <?php
            }
            ?>
                </tbody>
            </table>
            <?php
        }
    }
$showtext = new ShowText;