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
 * 変更日：2021/01/01
 * 追加内容：検索条件を保存できるように（苦戦しました）
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値（変える）
// $_SESSION['user_id'] = 1;

// 初期値（変数名や内容を変える）
$list_table = 'listing';
$member_table = 'member';
$search_table = 'search_conditions';
$product_name = '';
$search_value = ['user_id' => '' ,'product_name' => ''];
$search_column = ['user_id','product_name'];

// ログイン
$search_value['user_id'] = $_COOKIE['user_id'];

// 商品名と選択された条件を取得する
if(isset($_GET['search_message'])){
    $search_value['product_name'] = $_GET['search_message'];
}
// if(isset($_POST['btn'])){
//     $search_value['product_name'] = $_POST['btn'];
// }


if(isset($search_value['product_name'])){
    // 検索条件に一致する商品画像の取得
    $link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    $line = get_lots_of_string($link,$list_table,$search_column[1],$search_value['product_name']);
    mysqli_close($link);
    
    // 検索条件(履歴)の保存
    $link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    entry($link,$search_table,$search_value,$search_column);
    mysqli_close($link);
}

// 商品画像が押された時の処理
if(isset($_POST['商品ボタンのラベル名'])){
    $_SESSION['id'] = $line['id'];
    header ('location:./product_detail.php');
    exit;
}

// 検索履歴表示する
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$keywords = get_five_column($link,$search_table,$search_column[0],$search_value['user_id']);
mysqli_close($link);


require_once './tpl/search.php';