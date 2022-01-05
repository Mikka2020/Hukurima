<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/top.css">
  <title>フクリマ</title>
</head>

<body>
  <header>
    <img src="./img/icon/hukurima.png" alt="logo" width="" height="40px">
    <p><a href="./login.php">ログイン</a></p>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2>TOPページ</h2>
      <section>
        <h3>人気カテゴリー</h3>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </section>
      <section>
        <h3>トレンド</h3>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </section>
      <section id="product">
        <h3>新着アイテム</h3>

        <?php foreach ($products_arr as $product) : ?>
        <div class="product-area">
          <h4><?php echo $product['product_name']; ?></h4>
          <div class="product-item">
            <a href="./product_detail.php?id=<?php echo $product['listing_id']; ?>">
              <img class="product-img"
                src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id'] ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
                alt="商品" width="180px" height="" />
            </a>
            <form action="" method="post" class="favorite-btn">
              <button type="submit">
                <img src="./img/icon/heart-regular.svg" alt="いいねアイコン" width="24px" height="">
              </button>

            </form>
          </div>

          <div class="product-explain">
            <p class="profile">
              <a href="./profile.php?user_id=<?php echo $product['user_id']; ?>">
                <img class="prof-img"
                  src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $product['nickname']; ?>.<?php echo $product['prof_img_extension']; ?>"
                  alt="プロフィール画像" width="24px" height="24px" />
                <?php echo $product['nickname']; ?>
              </a>
            </p>
            <p class="price">¥<?php echo $product['price']; ?></p>
          </div>

        </div>
        <?php endforeach; ?>
      </section>
      <p class="hanger-icon"><img src="./img/icon/ハンガー.png" alt="表示終了アイコン"></p>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>