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
  <header>
    <p>取引画面</p>
  </header>
  <main>
    <article>
      <section class="product-section">
        <div>
          <img
            src="./img/users/<?php echo $line['user_id']; ?>/products/<?php echo $line['listing_id']; ?>/<?php echo $line['product_name']; ?>_1.<?php echo $line['img_extension']; ?>"
            alt="商品画像サムネイル" width="80px" height="" />
        </div>
        <div>
          <p class="product-name"><?php echo $line['product_name']; ?></p>
          <p class="price">¥<?php echo $line['price']; ?></p>
        </div>
      </section>

      <section>
        <h2>配送状況</h2>
        <div class="progress-bar-area">
          <ul class="progress-bar">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <ul class="">
            <li>発送準備中</li>
            <li>発送済</li>
            <li>配達中</li>
            <li>配達済</li>
          </ul>
        </div>
        <p class="center send-status">配達済</p>
      </section>

      <section class="prof-section">
        <h2>出品者</h2>
        <p>
          <img class="prof-img"
            src="./img/users/<?php echo $line['user_id']; ?>/profile/<?php echo $profiles['nickname'];?>.<?php echo $profiles['prof_img_extension'];?>"
            alt="プロフィール画像" width="32px" height="32px" />
          <?php echo "Mari"; ?> さん
        </p>
        <button type="submit" class="btn msg-btn" name="message">メッセージ</button>
      </section>

      <div class="center other-query">
        <p><a href="">返品を申請する</a></p>
        <p><a href="">問題を報告する</a></p>
      </div>
      <div class="bg_btn_eval">
        <form action="" method="post">
          <button type="submit" class="btn eval-btn" name="eval_btn" value="on">評価画面へ</button>
        </form>
      </div>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>