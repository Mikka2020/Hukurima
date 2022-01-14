<!-- <pre> -->
<?php
/**
 * 内容：商品詳細画面
 * 作成日：2021/12/29
 * 初期作成者：高橋裕司
 * 編集者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/29
 * 変更内容：諸々も処理を追加
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
date_default_timezone_set('Asia/Tokyo');
require_once './config.php';
require_once './func.php';

// 初期値
// $list_table = 'listing'; // テーブル名
// $member_table = 'member';
// $profile_table = 'profile';
$columns = ['listing_id','user_id'];

// 「商品詳細画面」で見てた商品の商品IDを取得
$id = $_GET['id'];

// 商品IDに対する商品詳細情報と出品者情報の取得（後日正規化していたら、テーブルを結合させる）
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$product = get_column($link,TABLES['101'],$columns[0],$id);
mysqli_close($link);


// 購入ボタンが押された時の処理
if(isset($_POST['buy_btn'])){
    $_SESSION['buy_product_info'] = $product['listing_id']; // これは削除してもいいかも
    header ('location:./buying.php');
    exit;
}

// 時刻を計算する処理
$now = date("Y-m-d H:i:s");
$time1 = strtotime($now);
$time2 = strtotime($product['listed_at']);
$elapsed_time = ($time1 - $time2); //これで経過日数になっていると思う

// 経過時間による、出品経過日時の計算
if($elapsed_time < 60){
    $elapsed_time_msg = '1分未満';
} else if($elapsed_time/60/60 < 24) {
    $elapsed_time_msg = "1時間以内";
    for($i = 1;$i <= 24;$i++){
        if($elapsed_time/60/60 > $i) {
            $elapsed_time_msg = $i.'時間前';
            // continue;
        }
    }
} else if($elapsed_time/60/60/24 < 7) {
    for($j = 1;$j <= 7;$j++){
        if($elapsed_time/60/60/24 > $j) {
            $elapsed_time_msg = $j.'日前';
            // continue;
        }
    }
} else {
    $elapsed_time_msg = '1週間以上前';
}
// var_dump($elapsed_time_msg);

// 名前を取得する処理
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$user = get_column($link,TABLES['103'],$columns[1],$product['user_id']);
mysqli_close($link);


// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

require_once('./tpl/product_detail.php');








/*
// テスト用 高橋
require_once './config.php';
require_once './func.php';
$table = "listing";
$conditions = ['search' => '', 'sort' => 'favorite', 'trend' => ''];
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$line = get_column_order($link, $table, $conditions);
mysqli_close($link);
$product = $line[0];
var_dump($product);
require_once('./tpl/product_detail.php');
*/