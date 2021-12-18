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
*/


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 初期値
session_start();
$table = 'listing'; // テーブル名
$column = 'id';

// 「商品詳細画面」で見てた商品の商品IDを取得
$id = $_SESSION['product_id'];
unset($_SESSION['product_id']);

// 商品IDに対する商品詳細情報と出品者情報の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get_column($link,$table,$column,$id);
mysqli_close($link);

// 購入ボタンが押された時の処理
if(isset($_POST['buy_btn'])){
    $_SESSION['buy_product_info'] = $line;
    header ('location:./entry_confirm.php');
    exit;
}

require_once './tpl/buy.php';