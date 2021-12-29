<!-- <pre> -->
<?php
/**
 * 内容：出品履歴一覧画面
 * 作成日：2021/12/29
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/29
 * 追加内容：一連の流れを記述（並び替え・絞り込みボタンは一旦無視）
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 動作確認用定数
$column = 'user_id';
$where = 'A0001';

// 初期値
$list_table = 'listing';
$member_table = 'member';

// 商品一覧で表示させるための処理
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$products = get_all($link,$list_table,$column,$where);
mysqli_close($link);

// 商品が押された時の処理
if(isset($_POST['class名'])){
    $_SESSION['id'] = $line['id']; // 出品詳細画面で使用する
    header('location:./listed_history.php');
    exit;
}

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

var_dump($products);


require_once('./tpl/listed_history_list.php');