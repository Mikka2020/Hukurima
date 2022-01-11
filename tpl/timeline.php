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
    <?php foreach($products_arr as $product): ?>
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
        <img src="./img/icon/heart-regular.svg" alt="いいねボタン" width="24px" height="24px">5
        <img src="./img/icon/返信アイコン.svg" alt="返信ボタン" width="24px" height="24px">1
      </p>
      <p>
        <img src="./img/icon/時計アイコン.svg" alt="投稿時間"><?php echo $product['post_at']; ?>
      </p>
    </section>
    <?php endforeach; ?>
  </main>
  <footer class="global-footer">
    <nav>
      <ul>
        <li>
          <a href="">
            <img src="./img/icon/ホームアイコン.svg" alt="ホームボタン"><br>
            ホーム
          </a>
        </li>
        <li>
          <a href="">
            <img src="./img/icon/さがすアイコン.svg" alt="探すボタン"><br>
            さがす
          </a>
        </li>
        <li>
          <a href="">
            <img src="./img/icon/DMアイコン.svg" alt="メッセージボタン"><br>
            メッセージ
          </a>
        </li>
        <li>
          <a href="">
            <img src="./img/icon/通知アイコン.svg" alt="通知ボタン"><br>
            通知
          </a>
        </li>
        <li>
          <a href="">
            <img src="./img/icon/マイページアイコン.svg" alt="マイページボタン"><br>
            マイページ
          </a>
        </li>
      </ul>
    </nav>
  </footer>
</body>

</html>