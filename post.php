<?php
session_start();
require_once('./func.php');
require_once('./config.php');

$post_sentence = "";
$listing_id = 0;
$product_name = "";

// 出品選択画面から戻ってきたときの処理
if (isset($_SESSION['listing_id'])) {
  $listing_id = $_SESSION['listing_id'];
  $post_sentence = $_SESSION['post_sentence'];
  // session_destroy();

  $sql = "SELECT * FROM listing WHERE listing_id = " . $listing_id;
  $product = get_db_record($sql);
  $product_name = $product['product_name'];
}

// 投稿ボタンが押されたとき
if (isset($_POST['post_submit'])) {
  $upload_file = $_FILES['post_img'];
  $extension = pathinfo($_FILES['post_img']['name'])['extension'];
  $post_sentence = $_POST['post_sentence'];

  // 投稿をDBにアップロード
  $sql = "INSERT INTO posts";
  $sql .= "(member_id , post_sentence, post_img_extension) ";
  $sql .= " VALUES ";
  $sql .= " ('" . $_COOKIE['user_id'] . "', '" . $post_sentence . "','" . $extension . "' ) ";
  
  // インサートしてidを返す
  $post_id = return_insert_record_id(HOST, USER_ID, PASSWORD, DB_NAME, $sql);

  if (isset($listing_id)) {
    $sql = "UPDATE posts SET listing_id = ". $listing_id;
    $sql .= " WHERE post_id = ". $post_id;
    update_db($sql);
  }
  
  // 投稿された画像の名前を投稿idにしてフォルダへ移動    
  move_uploaded_file($upload_file['tmp_name'], './img/users/' . $_COOKIE['user_id'] . '/posts/' . $post_id . '.' . $extension);


  session_destroy();
  header('location:./timeline.php');
  exit;

}

// 出品ボタンを押したときの処理
if(isset($_POST['listing_btn'])) {
  $_SESSION['post_sentence'] = $_POST['post_sentence'];

  header('location:./post_listed_history_list.php');
  exit;
}



require_once('./tpl/post.php');