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
    <h2>取引画面</h2>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <img class="header-logo" src="./img/icon/hukurima.png" alt="" width="" height="30px">
  </header>
  <main>
    <article>
      <h3>商品情報</h3>
      <section class="product-info">
        <p><img
            src="./img/users/<?php echo $line['user_id']; ?>/products/<?php echo $line['listing_id']; ?>/<?php echo $line['product_name']; ?>_1.<?php echo $line['img_extension']; ?>"
            alt="商品画像" width="70px" height="70px" /></p>
        <ul>
          <li><?php echo $line['product_name']; ?></li>
          <li class="brand"><?php echo $line['brand']; ?></li>
          <li class="red">¥<?php echo $line['price']; ?></li>
        </ul>
        <div><a href="product_detail.php?id=<?php echo $line['listing_id'];?>"><img src="./img/icon/進むアイコン.png"
              alt="進むボタン"></a></div>
      </section>

      <!-- <section class="product-section">
        <div>
          <img
            src="./img/users/<?php echo $line['user_id']; ?>/products/<?php echo $line['listing_id']; ?>/<?php echo $line['product_name']; ?>_1.<?php echo $line['img_extension']; ?>"
            alt="商品画像サムネイル" width="80px" height="" />
        </div>
        <div>
          <p class="product-name"><?php echo $line['product_name']; ?></p>
          <p class="price">¥<?php echo $line['price']; ?></p>
        </div>
      </section> -->

      <h3>配送状況</h3>
      <section class="delivery-state">
        <div class="progress-bar-area">
          <ul class="progress-bar">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <ul class="state-text">
            <li>発送準備中</li>
            <li>発送済</li>
            <li>配達中</li>
            <li>配達済</li>
          </ul>
        </div>
        <p class="center send-status">配達済</p>
      </section>

      <h3><?php echo $user;?></h3>
      <section class="profile-section">
        <p><a href="profile?id=<?php echo $profiles['user_id'];?>"><img class="prof-img"
            src="./img/users/<?php echo $profiles['user_id'];?>/profile/<?php echo $profiles['nickname']; // 会員名 ?>.<?php echo $profiles['prof_img_extension'];?>"
            alt="プロフィール画像" width="30px" height="30px"></a></p>
        <p><?php echo $profiles['nickname'];?> さん</p>
        <p class="message-btn">メッセージ</p>
      </section>


      <div class="contact">
        <p><a href="">返品を申請する</a></p>
        <p><a href="">問題を報告する</a></p>
      </div>

      <div class="bg_btn_eval">
        <form action="evaluate.php" method="post">
          <button type="submit" class="btn eval-btn buy_btn" name="eval_btn" value="<?php echo $line['listing_id'];?>">評価画面へ</button>
        </form>
      </div>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>