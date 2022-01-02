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
  <header></header>
  <main>
    <img
      src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.jpg"
      alt="商品画像" width="360px" height="420px"> <!-- 商品画像 -->
    <ul>
      <?php // foreach($product_images as $product/image): ?>
      <li>
        <img
          src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.jpg"
          alt="その他の商品画像" width="64px" height="64px">
      </li> <!-- その他の商品画像のサムネイルをアップロードされた枚数分表示 -->
      <?php // endforeach; ?>
    </ul>
    <article>
      <section>
        <h3><?php echo $product['product_name']; ?></h3>
        <ul>
          <li><?php echo $product['brand']; ?></li>
          <li>¥<?php echo $product['price'] ?></li>
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
        <p>
          <img src="./img/icon/clock-regular.svg" alt="時計アイコン" width="16px" height="16px">
          <?php echo $product['listed_at']; ?>
        </p>
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
          <li><?php echo $days_to_ship[$product['days_to_ship']]; ?></li>
        </ul>
        <ul>
          <li>ハンガーボックス</li>
          <li><?php echo 'あり'; ?></li>
        </ul>
        <ul>
          <li>クリーニング</li>
          <li><?php echo '可'; ?></li>
        </ul>
        <ul>
          <li>出品者</li>
          <li>
            <img src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $user_name; ?>.jpg"
              alt="プロフィール画像" width="32px" height="32px">
            <?php echo $product['user_name']; ?>
          </li>
        </ul>
      </section>
    </article>

  </main>
  <footer>
    <form action="" method="post">
      <button type="submit" class="btn">購入する</button>
    </form>
  </footer>
</body>

</html>