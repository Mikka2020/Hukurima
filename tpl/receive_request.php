<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/receive_request.css">
  <title>Document</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <p>購入申請一覧</p>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2>購入申請一覧</h2>
      <section class="request-section">
        <p class="prof-img">
          <a href="./profile.php?id=<?php echo 1; ?>">
            <img src="./img/users/1/profile/huku.jpg" alt="プロフィール画像" width="60px" height="60px">
          </a>
        </p>
        <div>
          <p>
            <?php echo "Huku"; ?> さん
          </p>
          <p>
            <img src="./img/icon/clock-regular.svg" alt="時計アイコン" width="16px">
            <?php echo "12時間前"; ?>
          </p>
        </div>
        <ul>
          <li>
            <button type="submit" name="deny_btn" class="deny-btn">拒否</button>
          </li>
          <li>
            <button type="submit" name="approval_btn" class="approval-btn">承認</button>
          </li>
        </ul>
      </section>
    </article>

    <p class="hanger-icon"><img src="./img/icon/ハンガー.png" alt="表示終了アイコン"></p>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>