<!-- <pre> -->
<?php
/**
 * 内容：購入画面
 * 作成日：2021/12/17
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/29
 * 追加内容：全体的な処理（tpl側のクラス名が決まり次第変更をかける）
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 初期値
$login_id = $password = '';
// $table = 'listing'; // テーブル名
$column = 'id';

// ユーザID、パスワードの取得
if(isset($_POST['login_btn'])){
    $login_id = $_POST['login_id'];
    $password = $_POST['password'];
}

// ログインボタンが押された時の処理
if(isset($_POST['login_btn'])){
    // ログイン処理
    $link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    $id = get_id($link,TABLES['101'],$login_id,$password);
    mysqli_close($link);

    if(isset($id)){
        setcookie('user_id',$id['user_id'],time() + 3600*24*7);
        header ('location:./profile.php');
        exit;
    }
}

// 戻るボタン押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

require_once('./tpl/login.php');