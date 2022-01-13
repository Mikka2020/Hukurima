<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/timeline.css">
  <title>Document</title>
</head>

<body>
  <header>
    <img src="./img/icon/hukurima.png" alt="" width="" height="30px">
  </header>
  <main>
    <?php foreach ($products_arr as $product) : ?>
    <section>
      <div class="post-div">
        <a href="">
          <img class="prof-img"
            src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $product['nickname'] ?>.<?php echo $product['prof_img_extension']; ?>"
            alt="プロフィール画像" width="32px" height="32px">
        </a>
        Mari
        <img class="menu" src="./img/icon/三点リーダーアイコン.svg" alt="メニューボタン" width="18px" height="">
      </div>
      <p><?php echo $product['post_sentence']; ?></p>

      <p class="post-img">
        <img
          src="./img/users/<?php echo $product['user_id'] ?>/posts/<?php echo $product['post_id'] ?>.<?php echo $product['post_img_extension']; ?>"
          alt="投稿画像" width="320px" height="320px">
      </p>

      <p>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart"
          class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
          width="24px" height="">
          <path fill="<?php echo "#ccc"; ?>"
            d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
          </path>
        </svg>

        5
        <img src="./img/icon/返信アイコン.svg" alt="返信ボタン" width="24px" height="24px">1
      </p>
      <p>
        <img src="./img/icon/時計アイコン.svg" alt="投稿時間"><?php echo mb_substr($product['post_at'], 0, -3); ?>
      </p>
    </section>
    <?php endforeach; ?>
    <div class="post-btn">
      <a href="./post.php">
        <img src="./img/icon/羽根ペンアイコン.svg" alt="" width="32px" height="">
      </a>
    </div>
  </main>
  <footer class="global-footer">
    <?php require_once('./sns_footer.php'); ?>
  </footer>
</body>

</html>