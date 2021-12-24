<!-- <pre> -->
<?php
/**
 * 内容：検索画面
 * 作成日：2021/12/21
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/21
 * 追加内容：2021/12/24〜の作業のためにコメントを記述
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値（変える）
$conditions = ['衣服','眼鏡'];

// 初期値（変数名や内容を変える）
$list_table = 'listing';
$member_table = 'member';
$user_id = $_SESSION['user_id'];
$product_name = '';
// $conditions = [];

// 商品名と選択された条件を取得する
if(isset($_POST['message'])){
    $product_name = $_POST['message'];
}
if(isset($_POST['btn'])){
    $conditions = $_POST['btn'];
}

// ユーザが投稿している商品画像の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get_column_multiple_condition($link,$list_table,$conditions,$product_name); // ここを新しい関数にする。（複数条件なのでWHERE句はANDではなくORを使う）
mysqli_close($link);

// 商品画像が押された時の処理
if(isset($_POST['商品ボタンのラベル名'])){
    $_SESSION['id'] = $line['id'];
    header ('location:./product_detail.php');
    exit;
}

require_once './tpl/search.php';