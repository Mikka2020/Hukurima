<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/evaluate.css" />
  <title>評価画面</title>
</head>

<body>
  <h1>フクリマ</h1>
  <header>
    <h2>評価</h2>
  </header>
  <main>
    <h3>評価</h3>
    <section class="evaluate">
      <p>今回の取引の評価を入力してください</p>
      <form method="post" action="" enctype="multipart/form-data">
        <div class="stars">
          <span>
            <input id="review01" type="radio" name="review" value="5"><label for="review01">★</label>
            <input id="review02" type="radio" name="review" value="4"><label for="review02">★</label>
            <input id="review03" type="radio" name="review" value="3"><label for="review03">★</label>
            <input id="review04" type="radio" name="review" value="2"><label for="review04">★</label>
            <input id="review05" type="radio" name="review" value="1"><label for="review05">★</label>
          </span>
        </div>
        <textarea name="msg" cols="20" rows="3" placeholder="取引相手にメッセージを入力"></textarea>
        <h4 class="<?php echo $class; ?>">チップを追加(任意)</h4>
        <div class="tip <?php echo $class; ?>">
          <input type="text" name="tip" placeholder="金額を入力">
          <span class="unit">円</span>
        </div>
        <button type="submit" name="submit_btn" class="btn" value="<?php echo $listing_id; ?>">評価を送信する</button>
      </form>
    </section>

    <h3>取引商品</h3>
    <section class="evaluate_product">
      <p><img
          src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
          alt="商品画像" width="70px" height="70px" /></p>
      <ul>
        <li><?php echo $product['product_name']; ?></li>
        <li class="red">¥<?php echo $product['price']; ?></li>
      </ul>
      <div><a href="product_detail.php?id=<?php echo $product['listing_id']; ?>"><img src="./img/icon/進むアイコン.png"
            alt="進むボタン"></a></div>
    </section>

    <h3><?php echo $user; ?></h3>
    <section class="user_info">
      <p><a href="profile.php?id=<?php echo $profile['user_id']; ?>"><img
            src="./img/users/<?php echo $profile['user_id']; ?>/profile/<?php echo $profile['nickname']; ?>.<?php echo $profile['prof_img_extension']; ?>"
            alt="ユーザー画像" /></a></p>
      <p><a href="profile.php?id=<?php echo $profile['user_id']; ?>"><?php echo $profile['nickname']; ?>さん</a></p>
      <button>取引メッセージ</button>
    </section>

  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>