<!-- <pre> -->
<?php
/**
 * 内容：購入画面
 * 作成日：2021/12/17
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/17
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/28
 * 追加内容：ファイル名の変更
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値
// $_SESSION['product_id'] = 1;

// 初期値
// $table = 'listing'; // テーブル名
$columns = ['listing_id', 'user_id'];


// 「商品詳細画面」で見てた商品の商品IDを取得
$id = $_SESSION['buy_product_info'];
// unset($_SESSION['buy_product_info']);
// var_dump($id);

// 商品IDに対する商品詳細情報と出品者情報の取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$line = get_column($link, TABLES['101'], $columns[0], $id);
mysqli_close($link);

// ユーザ情報を取得する処理
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$profiles = get_column($link, TABLES['103'], $columns[1], $line['user_id']);
mysqli_close($link);

// 配送先情報を取得する処理
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$address = get_column($link, "shipping_address", $columns[1], $_COOKIE['user_id']);
mysqli_close($link);


// 購入ボタンが押された時の処理
if (isset($_POST['buy_btn'])) {
    unset($_SESSION['buy_product_info']);
    $_SESSION['bought_product_info'] = $line['listing_id'];

    $cleaning_flg = 0;
    $hanger_flg = 0;
    if (isset($_POST['cleaning_flg'])) {
        $cleaning_flg = 1;
    }
    if (isset($_POST['hanger_flg'])) {
        $hanger_flg = 1;
    }

    // DBの取引テーブルにインサート
    $sql = " INSERT INTO dealings ";
    $sql .= " (listing_id, buyer_user_id,listing_user_id , dealing_flg, cleaning_flg, hanger_flg) ";
    $sql .= " VALUES ";
    $sql .= " (" . $line['listing_id'] . ", " . $_COOKIE['user_id'] . ", " . $line['user_id'] . ", 1, " . $cleaning_flg . ", " . $hanger_flg;
    $sql .= ")";
    update_db($sql);

    // DBの評価テーブルにインサート
    $sql = " INSERT INTO evaluations ";
    $sql .= " (listing_user_id, buyer_user_id) ";
    $sql .= " VALUES ";
    $sql .= " ( " . $line['user_id'] . ", " . $_COOKIE['user_id'];
    $sql .= ")";
    update_db($sql);

    header('location:./trading.php');
    exit;
}

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

require_once './tpl/buying.php';