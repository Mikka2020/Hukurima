<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/trading.css" />
  <title>取引</title>
</head>

<body>
  <main>
    <article>
      <section class="product-area">
        <div>
          <img src="./img/users/<?php echo "2"; ?>/products/<?php echo "1"; ?>/<?php echo 'アシメレースアップリボンニット'; ?>_1.jpg"
            alt="商品画像サムネイル" width="80px" height="80px" />
        </div>
        <div>
          <p>
            アシメレースリボンニット（長袖）<br />
            ¥3,600
          </p>
        </div>
      </section>

      <section>
        <h2>配送状況</h2>
        <!-- <img src="./img/progress.png" alt="配送状況プログレスバー" width="375px" height="" /> -->
        <div class="progress-bar-area">
          <ul class="progress-bar">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <ul class="send-status">
            <li>発送準備中</li>
            <li>発送済</li>
            <li>配達中</li>
            <li>配達済</li>
          </ul>
        </div>
        <p class="center">配達済</p>
      </section>

      <section>
        <h2>出品者</h2>
        <p>
          <img src="./img/users/2/prof/mari.jpg" alt="プロフィール画像" width="32px" height="32px" />
          Mari さん
        </p>
        <p><button type="submit" class="btn msg-btn">メッセージ</button></p>
      </section>

      <div class="center">
        <a href="">返品を申請する</a><br />
        <a href="">問題を報告する</a>
      </div>
      <div class="bg_btn_eval">
        <button type="submit" class="btn eval-btn">評価画面へ</button>
      </div>
    </article>
  </main>
</body>

</html>