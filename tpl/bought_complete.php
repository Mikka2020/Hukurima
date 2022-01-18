<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bought_complete.css">
  <title>フクリマ 購入手続き完了</title>
</head>
<body>
  <h1>フクリマ</h1>
  <header class="global-header">
    <img class="header-logo" src="./img/icon/hukurima.png" alt="" width="100px" height="30px">
  </header>

  <main>
    <article>
      <section>
        <p class="complete-msg">購入手続きが完了しました</p>
        <p class="center"><img src="./img/icon/取引完了.png" alt="" width="150px" height="145px"></p>
        <!-- <form action="trading.php" metho="post">
          <button type="submit" name="listing_id" value="<?php //echo $listing_id;?>">取引内容確認はこちらから</button>
        </form> -->
        <p class="trading"><a href="./trading_history_list.php">取引内容確認はこちらから</a></p>
        <p class="top">
          <a href="./top.php">トップへ戻る</a>
        </p>
      </section>
    </article>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>

</body>
</html>