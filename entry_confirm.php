<!-- <pre> -->
<?php
/**
 * 内容：会員登録確認画面
 * 作成日：2021/12/25
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/25
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 初期化
$input_entry_data = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // 入力された情報をセットする配列
$err_msg = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // エラー出力用配列
$input_entry_label = ['login_id' , 'address' , 'address_confirm' , 'password' , 'surn_name_han' , 'first_name_han' , 'surn_name_kana' , 'first_name_kana' , 'birth_day' , 'tel']; // 添字に対するラベル名がセットされている配列
$table = 'member';

// 会員登録がされてなかった時の処理
// if(){
    // 会員登録案内ページに遷移させる処理
// }

// セッションを取得
// $input_entry_data = $_SESSION['input_entry_data'];

// 全項目が入力されていた時の処理
// if(isset(登録ボタンが押されたとき)){
//     // 登録処理
//     $link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
//     mysqli_set_charset($link , 'utf8');
//     $id = entry($link,$table,$input_entry_data,$input_entry_label);
//     mysqli_close($link);

//     setcookie('id',$id,time()3600*24*7);
//     if(isset($_COOKIE['id'])){
//         header ('location:./entry_complete.php');
//         exit;
//     }
// }

// 戻るボタンが押された時の処理(name="back")
if(isset($_POST['back'])){
    header ('location:./entry.php');
    exit;
}

require_once './tpl/entry_confirm.php';
?>