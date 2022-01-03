<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/buy.css">
  <title>購入画面</title>
</head>

<body>
  <header>
    <?php echo $line['product_name']; ?>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2 class="none"><?php echo $line['product_name']; ?></h2>
      <section class="img-section">
        <h3 class="none">商品画像</h3>
        <img class="product-img"
          src="./img/users/<?php echo $line['user_id']; ?>/products/<?php echo $line['listing_id']; ?>/<?php echo $line['product_name']; ?>_1.<?php echo $line['img_extension'] ?>"
          alt="商品画像" width="360px" height="">
      </section>
      <section>
        <h3>商品説明</h3>
        <ul>
          <li class=""><?php echo $line['product_name']; ?></li>
          <li class="brand"><?php echo $line['brand']; ?></li>
          <li class="price">¥<?php echo $line['price']; ?></li>
        </ul>

      </section>
      <section>
        <h3>商品説明文</h3>
        <p>
          <?php echo $line['product_explain']; ?>
        </p>

      </section>
      <section class="product-section">

        <div class="product-detail">
          <ul>
            <li>カテゴリ</li>
            <li><?php echo $line['product_category']; ?></li>
          </ul>
          <ul>
            <li>商品の状態</li>
            <li><?php echo $product_condition[$line['product_condition']]; ?></li>
          </ul>
          <ul>
            <li>発送までの日数</li>
            <li><?php echo $days_to_ship[$line['days_to_ship']]; ?></li>
          </ul>

        </div>
        <!-- <p class="center">商品を閉じる</p> -->
      </section>

      <section class="profile-section">
        <h3>出品者</h3>
        <p><img class="prof-img" src="./img/users/<?php echo 2; ?>/profile/<?php echo "mari"; ?>.jpg" alt="プロフィール画像"
            width="30px" height="30px"></p>
        <p><?php echo "Mari"; ?> さん</p>
        <p class="message-btn">メッセージ</p>
      </section>

      <section class="address-section">
        <h3>配送先</h3>
        <form action="" method="post">
          <ul>
            <?php // foreach($address as $address): ?>
            <li>
              <input type="radio" name="" id="">配送先<?php echo "1"; ?> <br>
              〒<?php echo "530-0001"; ?> <br>
              <?php echo "大阪市北区梅田3-3-1"; ?>
            </li>
            <?php // endforeach; ?>

            <li><label for=""><span>+</span>新しい配送先を追加する</label></li>
          </ul>
      </section>
      <section>
        <h3>オプション</h3>
        <input type="checkbox" name="" id="">クリーニングあり

      </section>
      <p class="center">
        <a href="">取引中止を申請する</a><br>
        <a href="">問題を報告する</a>
      </p>

    </article>
  </main>
  <footer>
    <button type="submit" name="buy_btn" value="on" class="btn buy-btn">購入する</button>
  </footer>
  </form>
</body>

</html>