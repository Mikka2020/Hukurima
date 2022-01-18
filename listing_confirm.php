<?php

/**
 * 内容：出品画面
 * 作成日：？
 * 作成者：高橋裕司
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/01/06
 * 追加内容：購入処理を追加
 * ------------------------------------------------------------------------------------------------------------------------
 */

// 参照ファイル呼び出し
session_start();
require_once('./config.php');
require_once './func.php';
$footer_colors['listing'] = '#fe8900';

// 全画面で代入された値
$user_id = $_COOKIE['user_id'];
$column = 'user_id';
$data = $_SESSION['listing_data'];
$listing_label = ['product_name', 'img_extension',  'price', 'product_explain', 'product_category',  'product_condition', 'brand', 'days_to_ship', 'cleaning_flg', 'picking_flg', 'auto_approval'];

// 購入ボタンが押された時の処理
if (isset($_POST['listing_btn'])) {
  // 登録処理
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  $id = insert($link, TABLES['101'], $listing_label, $column, $data, $user_id);
  mysqli_close($link);




  // IDに合わせた画像用フォルダを作成
  if ($id != '') {
    $file_path = './img/users/' . $user_id . '/products/' . $id;
    mkdir($file_path, 0777);
    chmod($file_path, 0777);

    // 画像移動
    $pre_img = './img/users/' . $user_id . '/pre/' . $data[0] . '.' . $data[1];

    // 投稿情報をSNSで投稿
    $sql = " INSERT INTO posts ";
    $sql .= " (member_id , post_sentence , post_img_extension, listing_id) ";
    $sql .= " VALUES ";
    $sql .= " ( " . $user_id  . ",'" . $_SESSION['display_data']['product_explain'] . "', '" . $_SESSION['display_data']['img_extension'] . "'," . $id;
    $sql .= " ) ";
    $post_id = return_insert_record_id(HOST, USER_ID, PASSWORD, DB_NAME, $sql);
    chmod("./img/users/" . $user_id . "/posts", 0777);
    copy($pre_img, "./img/users/" . $user_id . '/posts/' . $post_id . '.' . $data[1]);

    rename($pre_img, $file_path . '/' . $data[0] . '_1.' . $data[1]);

    // 画面遷移
    session_destroy();
    header('location:./product.php');
    exit;
  }
}


// テスト用
$listing = $_SESSION['display_data'];

// $listing = [
//   'listing_id' => '2',
//   'user_id' => '2',
//   'product_name' => 'アシメレースアップリボンニット',
//   'img_extension' => 'jpg',
//   'price' => '3600',
//   'product_explain' => 'これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。',
//   'product_category' => 'ブラウス',
//   'product_condition' => '0',
//   'brand' => 'LAISSE PASSE',
//   'days_to_ship' => '0',
//   'cleaning_flg' => '1',
//   'picking_flg' => '1',
//   'listed_at' => '2000/10/01',
//   'auto_approval' => '0',
// ];

require_once('./tpl/listing_confirm.php');