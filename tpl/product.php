<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="./css/product.css" type="text/css" />
  <title>商品一覧</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px" height="">
      </a>
    </p>
    <form action="" method="get">
      <input class="search_text" type="text" name="search" placeholder="商品を検索しよう" value="<?php echo $search; ?>" />
      <button class="grass" type="submit" name="">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </header>
  <nav class="display-nav">
    <div class="modal-bg"></div>
    <ul class="parent-tabs">
      <li class="tab1">
        並び替え
        <ul class="sort-tabs">
          <a href="<?php echo $url.'&sort=new'; ?>">
            <li>出品日の新しい順</li>
          </a>
          <a href="<?php echo $url.'&sort=high_price'; ?>">
            <li>価格の高い順</li>
          </a>
          <a href="<?php echo $url.'&sort=low_price'; ?>">
            <li>価格の安い順</li>
          </a>
          <!-- <li><a href=""></a>ユーザーのオススメ</li> -->
        </ul>
      </li>
      <li class="tab2">
        絞り込み
      </li>
    </ul>
  </nav>
  <main>
    <h1>フクリマ</h1>
    <article id="field">
      <h2>商品一覧</h2>

      <!-- 商品一覧 -->
      <form action="" method="get">
        <!-- <select name="sort" id="sort" class="sort">
          <option value=""></option>
          <option value="high_price"></option>
          <option value="low_price"></option>
          <option value="user_recommend"></option>
          <option value="new"></option> -->
        <!-- <option value="listing_date_">出品日の古い</option> -->
        </select>
      </form>

      <section id="product">
        <h3>商品一覧</h3>

        <?php foreach ($products_arr as $product) : ?>
        <div class="product-area">
          <h4><?php echo $product['product_name']; ?></h4>
          <div class="product-item">
            <a href="./product_detail.php?id=<?php echo $product['id']; ?>">
              <img class="sold-icon <?php echo $product['dealing_listing_id'] === NULL ? "none" : ""; ?>"
                src="./img/icon/SOLDマーク(商品一覧).svg" alt="">
              <img class="product-item"
                src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['id'] ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
                alt="商品" width="180px" height="240px" />
            </a>
            <form action="" method="post">
              <button type="submit" class="favorite-btn" name="favorite_btn" value="<?php echo $product['id']; ?>">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart"
                  class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path fill="<?php echo $product['favorite_listing_id'] == $product['id'] ? "#FF8198" : "#e1e1e1"; ?>"
                    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                  </path>
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

      </section> <!-- 商品一覧終了 -->
    </article>
    <p class="hanger-icon"><img src="./img/icon/ハンガー.png" alt="表示終了アイコン"></p>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
  <script src="./js/product.js"></script>
</body>

</html>