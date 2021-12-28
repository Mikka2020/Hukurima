<!-- <pre> -->
<?php
/**
 * 内容：商品一覧画面
 * 作成日：2021/12/17
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/17
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値（後で削除する）
$conditions = ['search' => '' , 'sort' => 'favorite' , 'trend' => ''];
$_SESSION['search'] = $conditions['search']; // テキストボックス
$_SESSION['sort'] = $conditions['sort']; // セレクトボックス
$_SESSION['trend'] = $conditions['trend']; // ラジオボタン


// 初期値
$table = 'listing'; // テーブル名
// $conditions = ['search' => '' , 'sort' => 'favorite' , 'trend' => ''];

// 検索条件（後でコメント外す）
// if (isset($_POST['search'])){
//     $_SESSION['search'] = $_POST['search']; // テキストボックス
// } else if (isset($_POST['sort'])){
//     $_SESSION['sort'] = $_POST['sort']; // セレクトボックス
// } else if (isset($_POST['trend'])){
//     $_SESSION['trend'] = $_POST['trend']; // ラジオボタン
// }

// 検索条件に変更があれば対応させる処理
if (isset($_SESSION['search'])){
    $conditions['search'] = $_SESSION['search'];
} else if (isset($_SESSION['sort'])){
    $conditions['sort'] = $_SESSION['sort'];
} else if (isset($_SESSION['trend'])){
    $conditions['trend'] = $_SESSION['trend'];
}

// 表示させる処理
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get_column_order($link,$table,$conditions);
mysqli_close($link);

// 商品画像が押された時の処理（ボタンにして欲しい）
if(isset($_POST['product_img'])){
    $_SESSION['product_img'] = $line; // sessionに商品IDを入れる
    header ('location:./entry_confirm.php');
    exit;
}

// ユーザアイコンが押された時の処理（ボタンにして欲しい）
if(isset($_POST['btn_seller'])){
    $_SESSION['seller_id'] = $line['id']; // sessionにユーザIDを入れる
    header ('location:./entry_confirm.php');
    exit;
}

// ハートマークが押された時の処理（ボタンにして欲しい）
// if(isset($_POST['btn_favorite'])){
//     お気に入りをDBに登録する処理
//     header ('location:./entry_confirm.php');
//     exit;
// }

// var_dump($conditions);
// var_dump($line);
// $tags = ['アウター', 'TheNorthFace', 'パーカー', 'DIESEL'];

require_once './tpl/product.php';