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
  <main>
    <article>
      <form action="./login.php" method="post">
        <ul>
          <li>ログインID</li>
          <li><input type="text" name="login_id"></li>
        </ul>
        <ul>
          <li>パスワード</li>
          <li><input type="text" name="password"></li>
        </ul>

        <button type="submit" name="login_btn" value="on">ログイン</button>
      </form>
    </article>
  </main>
</body>

</html>