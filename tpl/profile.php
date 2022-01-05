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
          src="./img/users/<?php echo $line['user_id']; ?>/profile/<?php echo $line['nickname'] ?>.<?php echo $line['prof_img_extension']; ?>"
          alt="プロフィール画像" width="32px" height="32px" />
        <?php echo $line['nickname']; ?> <br />
        <a href="">★★★★★ 72</a>

        <img src="./img/icon/本人確認.png" alt="本人確認バッジ" width="14px" height="16px" />
        <a href="">本人確認する</a>
        <ul class="nav_prof">
          <li>
            55 <br />
            <span>出品</span>
          </li>
          <li>
            144 <br />
            <span>投稿</span>
          </li>
          <li>
            42 <br />
            <span>フォロー</span>
          </li>
          <li>
            12 <br />
            <span>フォロワー</span>
          </li>
        </ul>
      </section>

      <section>
        <h2>自己紹介</h2>
        <p>
          <?php echo $line['prof_text'] ?>
        </p>
        <button>閉じる</button>
      </section>

      <section>
        <?php // foreach() ?>
        <?php // endforeach; ?>
      </section>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>