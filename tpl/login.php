<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <title>ログイン</title>
</head>

<body>
  <header>
    <p>ログイン</p>
  </header>
  <main>
    <p class="logo">
      <img src="./img/icon/hukurima.png" alt="logo" width="200px">
    </p>
    <article>
      <section>
        <form action="./login.php" method="post">
          <ul>
            <li>ログインID</li>
            <li><input type="text" name="login_id" placeholder="ログインIDを入力"></li>
          </ul>
          <ul>
            <li>パスワード</li>
            <li><input type="text" name="password" placeholder="パスワードを入力"></li>
          </ul>
          <p class="login-btn">
            <button type="submit" name="login_btn" value="on">ログイン</button>
          </p>
          <p class="forget-text">＞＞ IDまたはパスワードをお忘れの方</p>
          <hr>
          <p class="entry-text">アカウントをお持ちでない方</p>
          <p class="entry-btn">
            <button type="submit" name="entry_btn">会員登録</button>
          </p>
        </form>
      </section>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>