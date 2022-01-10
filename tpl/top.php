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
    <p><a href="./login.php"><?php echo $header_msg; ?></a></p>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2>TOPページ</h2>
      <section id="category">
        <h3>人気カテゴリー</h3>
        <div class="category-items">
          <div>
            <a href="./product.php?search=コート">
              <img src="./img/ウールライクステンカラーコート.jpg" alt="カテゴリー画像（コート）" width="100px" height="100px">
              <p class="center">コート</p>
            </a>
          </div>
          <div>
            <a href="./product.php?search=バッグ">
              <img src="./img/ハンドバッグ.webp" alt="カテゴリー画像（バッグ）" width="100px" height="100px">
              <p class="center">バッグ</p>
            </a>
          </div>
          <div>
            <a href="./product.php?search=スニーカー">
              <img src="./img/ポルシェ-レガシー-ローレーサー-スニーカー.jpeg" alt="カテゴリー画像（スニーカー）" width="100px" height="100px">
              <p class="center">スニーカー</p>
            </a>
          </div>
        </div>
      </section>
      <!-- <section>
        <h3>トレンド</h3>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </section> -->
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
            <form action="" method="post">
              <button type="submit" class="favorite-btn" name="favorite_btn"
                value="<?php echo $product['listing_id']; ?>">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart"
                  class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    fill="<?php echo $product['favorite_listing_id'] == $product['listing_id'] ? "#FF8198" :"#e1e1e1" ; ?>"
                    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                  </path>
                </svg>
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