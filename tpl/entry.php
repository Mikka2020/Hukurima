<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録画面</title>
    <link rel="stylesheet" href="./css/core_style.css">
    <link rel="stylesheet" href="./css/entry_style.css">
</head>
<body>
<!-- <?php //require_once '参照ヘッダーファイル';?> -->

<main>

    <img src="../img/progress.png" alt="会員登録の進捗を表示する画像" width="300" height="80">

    <form action="" method="post" enctype="multipart/form-data">
    <article class="input_area">
        <div class="input_box"><p class="input_label">ニックネーム</p><input type="text" name="login_id" value="" placeholder="フクリマ内のユーザ名" class="input_form"></div>
        <div class="input_box"><p class="input_label">メールアドレス</p><input type="text" name="address" value="" placeholder="PC・携帯どちらでもOK" class="input_form"></div>
        <div class="input_box"><p class="input_label">メールアドレス (確認)</p><input type="text" name="address_confirm" value="" placeholder="メールアドレス再入力" class="input_form"></div>
        <div class="input_box"><p class="input_label">パスワード</p><input type="text" name="password" value="" placeholder="8文字以上の半角英数字" class="input_form"></div>
    </article>

    <p class="border">

    <article class="input_area">
        <div class="input_box"><p class="input_label">姓 (漢字)</p><input type="text" name="surn_name_han" value="" placeholder="福沢" class="input_form"></div>
        <div class="input_box"><p class="input_label">名 (漢字)</p><input type="text" name="first_name_han" value="" placeholder="玲子" class="input_form"></div>
        <div class="input_box"><p class="input_label">姓 (カナ)</p><input type="text" name="surn_name_kana" value="" placeholder="フクザワ" class="input_form"></div>
        <div class="input_box"><p class="input_label">名 (カナ)</p><input type="text" name="first_name_kana" value="" placeholder="レイコ" class="input_form"></div>
        <div class="input_box"><p class="input_label">生年月日</p><input type="text" name="birth_day" value="" placeholder="選択してください" class="input_form"></div>
        <div class="input_box"><p class="input_label">電話番号</p><input type="text" name="tel" value="" placeholder="ハイフンなしで入力" class="input_form"></div>
    </article>

    <article class="send_form">
        <p class="annotation">「次へ」ボタンを押すことにより、<a href="利用規約のファイル名" class="annotation_guide">利用規約</a>に同意したものとみなします。
        <button type="submit" name="next" value="next" class="next_btn">次へ</button>
    </article>
    </form>

</main>














<!-- <?php require_once '参照フッダーファイル';?> -->
<!-- <script src="" async></script> -->
</body>
</html>