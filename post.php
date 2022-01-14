<?php

require_once('./func.php');
require_once('./config.php');


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


if(isset($_POST['listing_btn'])) {
  header('location:./post_listed_history_list.php');
  exit;
}
require_once('./tpl/post.php');