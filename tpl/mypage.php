<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/mypage.css">
  <title>マイページ</title>
</head>

<body>
  <h1>フクリマ</h1>

  <header>
    <h2>マイページ</h2>
  </header>

  <main>
    <h3>会員設定</h3>
    <section>
      <ul>
        <li><a href="./profile.php">プロフィール</a></li>
        <li><a href="#">会員情報設定</a></li>
        <li><a href="#">配送先管理</a></li>
        <li><a href="#">売上金管理</a></li>
        <li><a href="#">本人確認</a></li>
      </ul>
    </section>

    <h3>ご利用情報</h3>
    <section>
      <ul>
        <li><a href="#">下書き一覧</a></li>
        <li><a href="#">いいねした商品</a></li>
        <li><a href="#">閲覧履歴</a></li>
        <li><a href="./listed_history_list.php">出品履歴</a></li>
        <li><a href="#">購入履歴</a></li>
        <li><a href="./trading_history_list.php">取引履歴</a></li>
      </ul>
    </section>

    <h3>診断</h3>
    <section>
      <ul>
        <li><a href="#">骨格診断</a></li>
        <li><a href="#">パーソナルカラー診断</a></li>
      </ul>
    </section>

    <h3>その他</h3>
    <section>
      <ul>
        <li><a href="#">通知設定</a></li>
        <li><a href="#">ヘルプ</a></li>
        <li><a href="#">お問い合わせ</a></li>
      </ul>
    </section>

    <section>
      <ul>
        <li><a href="./login.php">ログアウト</a></li>
      </ul>
    </section>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>

</body>

</html>