<!-- <pre> -->
<?php
/**
 * 内容：会員登録完了画面
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
// $input_entry_data = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // 入力された情報をセットする配列
// $err_msg = ['login_id' => '' , 'address' => '' , 'address_confirm' => '' , 'password' => '' , 'surn_name_han' => '' , 'first_name_han' => '' , 'surn_name_kana' => '' , 'first_name_kana' => '' , 'birth_day' => '' , 'tel' => '']; // エラー出力用配列
// $input_entry_label = ['login_id' , 'address' , 'address_confirm' , 'password' , 'surn_name_han' , 'first_name_han' , 'surn_name_kana' , 'first_name_kana' , 'birth_day' , 'tel']; // 添字に対するラベル名がセットされている配列
// $table = 'member';

// 会員登録がされてなかった時の処理
// if(){
    // 会員登録案内ページに遷移させる処理
// }

// 全項目が入力されていた時の処理
// if(isset($_COOKIE['id'])){
//     登録完了メッセージ表示処理
// }

require_once './tpl/entry_complete.php';
?>