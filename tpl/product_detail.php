<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/product_detail.css">
  <title>商品詳細</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <p>
      <?php echo $product['product_name']; ?>
    </p>
    <p class="menu-icon">
      <img src="./img/icon/三点リーダーアイコン.svg" alt="" width="24px">
    </p>
  </header>
  <main>
    <article>
      <section class="img-section">
        <h3>商品画像</h3>
        <img
          src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
          alt="商品画像" width="360px" height=""> <!-- 商品画像 -->
      </section>
      <section>
        <h3><?php echo $product['product_name']; ?></h3>
        <ul>
          <li><?php echo $product['brand']; ?></li>
          <li>¥<?php echo $product['price'] ?></li>
          <p>
            <img src="./img/icon/clock-regular.svg" alt="時計アイコン" width="16px" height="16px">
            <?php echo $elapsed_time_msg; ?>
          </p>
        </ul>
        <form action="" method="post">

          <button>
            <img src="./img/icon/heart-solid.svg" alt="いいねアイコン" width="24px"
              height=""><?php echo 1 // $product['favorite']; ?>
          </button>
          <button>
            <img src="./img/icon/comment-alt-regular.svg" alt="コメントアイコン" width="24px"
              height=""><?php echo  5; // $product['comment']; ?>
          </button>
        </form>

      </section>
      <section>
        <h4>商品説明</h4>
        <p><?php echo $product['product_explain']; ?></p>
        <ul>
          <?php // foreach($tags as $tag): ?>
          <li><?php // echo $tag; ?></li>
          <?php // endforeach; ?>
        </ul>
      </section>

      <section class="product-detail">
        <h4>商品詳細</h4>
        <ul>
          <li>カテゴリ</li>
          <li><?php echo $product['product_category']; ?></li>
        </ul>
        <ul>
          <li>商品の状態</li>
          <li><?php echo $product_condition[$product['product_condition']]; ?></li>
        </ul>
        <ul>
          <li>配送までの日数</li>
          <li><?php echo $days_to_ship[$product['ship_to_days']]; ?></li>
        </ul>
        <ul>
          <li>ハンガーボックス</li>
          <li><?php echo 'あり'; ?></li>
        </ul>
        <ul>
          <li>クリーニング</li>
          <li><?php echo '可'; ?></li>
        </ul>
      </section>
      <section class="prof-section">
        <h4>出品者</h4>
        <p>
          <img
            src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $user['nickname']; ?>.<?php echo $user['prof_img_extension']; ?>"
            alt="プロフィール画像" width="32px" height="32px">
          <?php echo $user['nickname']; ?> さん
        </p>
      </section>
    </article>

  </main>

  <footer>
    <form action="" method="post">
      <button type="submit" name="buy_btn" class="btn buy_btn">購入する</button>
    </form>
  </footer>

</body>

</html>