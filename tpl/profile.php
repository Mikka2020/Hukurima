<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/profile.css" />
  <title>プロフィール</title>
</head>

<body>
  <main>
    <article>
      <section>
        <img
          src="./img/users/<?php echo $profile['user_id']; ?>/profile/<?php echo $profile['nickname'] ?>.<?php echo $profile['prof_img_extension']; ?>"
          alt="プロフィール画像" width="32px" height="32px" />
        <?php echo $profile['nickname']; ?> <br />
        <a href="">
          <p><span class="star5_rating" data-rate="<?php echo (int)($evaluation['eval_val']); ?>"></span>
            <?php echo mb_substr($evaluation['eval_val'], 0, 4); ?>
          </p>
        </a>

        <img src="./img/icon/本人確認.png" alt="本人確認バッジ" width="14px" height="16px" />
        <a href="">本人確認する</a>
        <ul class="nav_prof">
          <li>
            <ul>
              <li><?php echo $listing_cnt; ?></li>
              <li>出品</li>
            </ul>
          </li>
          <li>
            <ul>
              <li><?php echo $post_cnt; ?></li>
              <li>投稿</li>
            </ul>
          </li>
          <li>
            <ul>
              <li>0</li>
              <li>フォロー</li>
            </ul>
          </li>
          <li>
            <ul>
              <li>0</li>
              <li>フォロワー</li>
            </ul>
          </li>
        </ul>
      </section>

      <section>
        <h2>自己紹介</h2>
        <p>
          <?php echo $profile['prof_text'] ?>
        </p>
        <button>閉じる</button>
      </section>

      <section id="products">
        <?php  foreach($products_arr as $product): ?>
        <div>
          <img
            src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['id']; ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
            alt="出品した商品" width="100px" height="100px">
          <img class="<?php echo $product['listing_id'] == NULL ? "none" : ""; ?>" src="./img/icon/SOLDマーク(出品履歴一覧).svg"
            alt="">
        </div>
        <?php  endforeach; ?>
      </section>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>