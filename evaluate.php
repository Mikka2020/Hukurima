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
$columns = ['listing_id','user_id'];


// 商品の配送状況の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$product = get_column($link,TABLES['101'],$columns[0],$listing_id);
mysqli_close($link);

// プロフィール情報の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$profiles = get_column($link,TABLES['103'],$columns[1],$product['user_id']);
mysqli_close($link);

// テスト用
// $product = [
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


echo "test";


require_once('./tpl/evaluate.php');