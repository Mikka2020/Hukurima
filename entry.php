<!-- <pre> -->
<?php
/**
 * 内容：会員登録画面
 * 作成日：2021/12/15
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/16
 * 追加内容：入力チェック（空白のみ）処理を追加
*/


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 初期化
$input_entry_data = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // 入力された情報をセットする配列
$err_msg = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // エラー出力用配列
$input_entry_label = ['login_id' => 'ニックネーム' , 'address' => 'メールアドレス' , 'address_confirm' => 'メールアドレス(確認)' , 'password' => 'パスワード' , 'surn_name_han' => '姓(漢字)' , 'first_name_han' => '名(漢字)' , 'surn_name_kana' => '姓(カナ)' , 'first_name_kana' => '名(カナ)' , 'birth_day' => '生年月日' , 'tel' => '電話番号']; // 添字に対するラベル名がセットされている配列

// 会員登録がされてなかった時の処理
// if(){
    // 会員登録案内ページに遷移させる処理
// }


// 入力値チェック処理
// 空白チェック
if(isset($_POST['next'])){
    foreach ($input_entry_data as $key => $value) {
        if($_POST[$key] == ''){
            $err_msg[$key] = $input_entry_label[$key].'が入力されていません';
        } else {
            $input_entry_data[$key] = $_POST[$key];
        }
    }
}

// 全項目が入力されていた時の処理
if(!isset($err_msg)){
    $_SESSION['input_entry_data'] = $input_entry_data; // 情報をセッションに残して画面遷移
    header ('location:./entry_confirm.php');
    exit;
}


// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

require_once './tpl/entry.php';
?>