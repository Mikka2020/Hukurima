<?php

/**
 * 内容：評価画面
 * 作成日：？
 * 作成者：高橋裕司
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/01/08
 * 追加内容：表示するための処理
 * 編集者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値
// $_SESSION['product_id'] = 2;

// 初期値
$listing_id = $_SESSION['bought_product_info'];
$columns = ['listing_id', 'user_id'];

// 商品の配送状況の取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$product = get_column($link, TABLES['101'], $columns[0], $listing_id);
mysqli_close($link);

// listing_idの取引idのbuyer_user_idのmember
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$dealing = get_column($link, 'dealings', $columns[0], $listing_id);
mysqli_close($link);

// 出品者がアクセスしたときの処理
if ($dealing['listing_user_id'] == $_COOKIE['user_id']) {
  // 購入者のプロフィールを取得
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  $profile = get_column($link, TABLES['103'], $columns[1], $dealing['buyer_user_id']);
  mysqli_close($link);
  
  // 出品者が評価ボタンを押したときの処理
  if (isset($_POST['submit_btn'])) {
    $evaluate_val = $_POST['review'];
    
    // フォームで入力された評価をDBに格納
    $sql = " UPDATE evaluations ";
    $sql .= " INNER JOIN dealings ON dealings.dealing_id = evaluations.dealing_id ";
    $sql .= " SET evaluations.to_buyer_evaluation = " . $evaluate_val;
    $sql .= " WHERE dealings.listing_id = " . $listing_id;
    update_db($sql);
  
    header('location:./evaluate_complete.php');
    exit;
  }
  
  
} else { // 購入者がアクセスしたときの処理
  // 出品者のプロフィールを取得
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  $profile = get_column($link, TABLES['103'], $columns[1], $product['user_id']);
  mysqli_close($link);
  // 購入者が評価ボタンを押したとき
  if (isset($_POST['submit_btn'])) {
    $evaluate_val = $_POST['review'];
    
    // フォームで入力された評価をDBに格納
    $sql = " UPDATE evaluations ";
    $sql .= " INNER JOIN dealings ON dealings.dealing_id = evaluations.dealing_id ";
    $sql .= " SET evaluations.to_listing_evaluation = " . $evaluate_val;
    $sql .= " WHERE dealings.listing_id = " . $listing_id;
    update_db($sql);
    
    header('location:./evaluate_complete.php');
    exit;
  }
}



// 出品者が評価ボタンを押したとき

require_once('./tpl/evaluate.php');