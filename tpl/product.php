<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="./css/product.css" type="text/css" />
  <title>商品一覧</title>
</head>

<body>
  <header></header>
  <main>
    <h1>フクリマ</h1>
    <article id="field">
      <h2>商品一覧</h2>
      <!-- トレンドエリア -->
      <section id="trend">
        <h3>トレンド</h3>
        <ul>
          <?php foreach ($tags as $tag) : ?>
          <li class="trend-tag">
            <a href="./product.php?search=<?php echo $tag; ?>">
              <?php echo $tag; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>
      <!-- トレンドエリア終了 -->

      <!-- 検索エリア  -->
      <section id="search">
        <h3>検索</h3>

        <!-- <form action="product.php" method="get">
          <input type="text" id="input_box" placeholder="商品を検索......" />
          <button type="submit" name="search_flag" value="on">
            検索
          </button>
        </form> -->

      </section>
      <!-- 検索エリア終了 -->


      <!-- 商品一覧 -->
      <select name="sort" id="sort" class="sort">
        <option value="">出品日の新しい順</option>
        <option value="high_price">価格の高い順</option>
        <option value="low_price">価格の安い順</option>
        <option value="user_recommend">ユーザーのオススメ</option>
        <option value="listing_date_">出品日の新しい</option>
        <option value="listing_date_">出品日の古い</option>
      </select>
      <section id="product">
        <h3>商品一覧</h3>


        <?php foreach ($line as $product) : ?>
        <div class="product-area">
          <h4><?php echo $product['product_name']; ?></h4>
          <div class="product-item">
            <a href="./product_detail.php?id=<?php echo $product['listing_id']; ?>">
              <img class="product-item"
                src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id'] ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
                alt="商品" width="180px" height="" /> <!-- 商品画像 -->
            </a>
          </div>

          <div class="product-explain">
            <p class="price">¥<?php echo $product['price']; ?></p>
            <!-- 値段 -->


            <p class="profile">
              <a href="./profile.php?user_id=<?php echo $product['user_id']; ?>">
                <img class="prof-img"
                  src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $profiles[$product['user_id']-1]['nickname']; ?>.<?php echo $profiles[$product['user_id']-1]['img_extension']; ?>"
                  alt="プロフィール画像" width="16px" height="16px" /> <!-- プロフィール画像 -->
                <?php echo $profiles[$product['user_id']-1]['nickname']; ?>
                <!-- 会員名 -->
              </a>
              <img src="./img/icon/heart-regular.svg" alt="いいねアイコン" width="16px" height="">
            </p>

          </div>

        </div>
        <?php endforeach; ?>

      </section> <!-- 商品一覧終了 -->
    </article>
  </main>

  <footer>
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>