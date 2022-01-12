<?php

require_once('./func.php');
require_once('./config.php');

function update_db($sql)
{
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  mysqli_query($link, $sql);
  mysqli_close($link);
}
function return_insert_record_id(string $host, string $user_name, string $user_password, string $db_name, string $sql): int
{
  // DB接続
  $link = mysqli_connect($host, $user_name, $user_password, $db_name);
  mysqli_set_charset($link, 'utf8');
  // sql文を読み込み
  mysqli_query($link, $sql);

  // DBのIDを呼び出し
  $id = mysqli_insert_id($link);

  mysqli_close($link);
  return $id;
}

// 投稿ボタンが押されたとき
if (isset($_POST['post_submit'])) {
  $upload_file = $_FILES['post_img'];
  $extension = pathinfo($_FILES['post_img']['name'])['extension'];
  $post_sentence = $_POST['post_text'];

  // 投稿をDBにアップロード
  $sql = "INSERT INTO posts (member_id , post_sentence, post_img_extension) ";
  $sql .= " VALUES ";
  $sql .= " ('" . $_COOKIE['user_id'] . "', '" . $post_sentence . "','" . $extension . "' ) ";
  
  // インサートしてidを返す
  $post_id = return_insert_record_id(HOST, USER_ID, PASSWORD, DB_NAME, $sql);
  
  // 投稿された画像の名前を投稿idにしてフォルダへ移動    
  move_uploaded_file($upload_file['tmp_name'], './img/users/' . $_COOKIE['user_id'] . '/posts/' . $post_id . '.' . $extension);

  header('location:./timeline.php');
  exit;

}
require_once('./tpl/post.php');