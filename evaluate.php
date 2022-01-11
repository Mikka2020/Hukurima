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
// $table = 'listing';
$columns = ['listing_id', 'user_id'];

// 商品の配送状況の取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$product = get_column($link, TABLES['101'], $columns[0], $listing_id);
mysqli_close($link);

// プロフィール情報の取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$profiles = get_column($link, TABLES['103'], $columns[1], $product['user_id']);
mysqli_close($link);


// DBのrecordを更新または挿入する
function update_db($sql)
{
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  mysqli_query($link, $sql);
  mysqli_close($link);
}

// 評価ボタンを押したとき
if (isset($_POST['submit_btn'])) {
  $evaluate_val = $_POST['review'];

  // フォームで入力された評価をDBに格納
  $sql = "UPDATE evaluations SET listing_evaluation = " . $evaluate_val . " WHERE dealing_id = 1";
  update_db($sql);
}


require_once('./tpl/evaluate.php');
