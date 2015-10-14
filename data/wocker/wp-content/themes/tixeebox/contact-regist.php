<?php get_header(); ?>
    <% include ../template/_nav-category %>

<?php

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

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="contact/">戻る</a></p>
</body>
</html>