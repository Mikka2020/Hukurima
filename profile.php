<!-- <pre> -->
<?php
/**
 * 内容：購入画面
 * 作成日：2021/12/19
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/19
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値
$_SESSION['user_id'] = 'tarou';

// 初期値
$list_table = 'listing';
$member_table = 'listing';
$user_id = $_SESSION['user_id'];
$column = 'user_id';

// 「商品詳細画面」で見てた商品の商品IDを取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get_column($link,$member_table,$column,$id);
mysqli_close($link);

// ユーザが投稿している商品画像の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get__lots_of($link,$list_table,$column,$user_id);
mysqli_close($link);

// 購入ボタンが押された時の処理
if(isset($_POST['buy_btn'])){
    $_SESSION['buy_product_info'] = $line;
    header ('location:./entry_confirm.php');
    exit;
}

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

// var_dump($line);

require_once './tpl/profile.php';