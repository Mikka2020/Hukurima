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
  <header class="global-header">
    <img class="header-logo" src="./img/icon/hukurima.png" alt="" width="" height="30px">
    <p class="login"><a href="./login.php"><?php echo $header_msg; ?></a></p>
  </header>
  <main>
    <article>

      <?php foreach ($products_arr as $product) : ?>
      <section>
        <div class="post-div">
          <a href="">
            <img class="prof-img"
              src="./img/users/<?php echo $product['user_id']; ?>/profile/<?php echo $product['nickname'] ?>.<?php echo $product['prof_img_extension']; ?>"
              alt="プロフィール画像" width="32px" height="32px">
          </a>
          <?php echo $product['nickname']; ?>
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
          0
          <img src="./img/icon/返信アイコン.svg" alt="返信ボタン" width="24px" height="24px">0
        </p>
        <p>
          <img src="./img/icon/時計アイコン.svg" alt="投稿時間"><?php echo mb_substr($product['post_at'], 0, -3); ?>
        </p>
      </section>
      <?php endforeach; ?>
      <a href="./post.php">
        <div class="post-btn">
          <img src="./img/icon/羽根ペンアイコン.svg" alt="" width="20px" height="">
        </div>
      </a>
      <a href="./top.php">
        <div class="change-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24.087" height="18.442" viewBox="0 0 24.087 18.442">
            <g id="紙袋の無料アイコン2" transform="translate(0 -60)">
              <path id="パス_26" data-name="パス 26" d="M0,60V78.442H24.087V60Zm1.505,1.505H22.581V76.936H1.505Z"
                fill="#ff8198" />
              <path id="パス_27" data-name="パス 27"
                d="M153.658,130.247a1.3,1.3,0,1,0-1.829,1.189v1.337a3.486,3.486,0,1,1-6.972,0v-1.337a1.3,1.3,0,1,0-1.054,0v1.337a4.54,4.54,0,1,0,9.08,0v-1.337A1.3,1.3,0,0,0,153.658,130.247Z"
                transform="translate(-136.299 -65.702)" fill="#ff8198" />
            </g>
          </svg>
        </div>
      </a>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./sns_footer.php'); ?>
  </footer>
</body>

</html>