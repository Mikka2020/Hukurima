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
  <header class="evaluate">
    <p>評価</p>
  </header>
  <main>
    <section class="alert">
      <div class="message">
        <p class="orange">✔︎</p>
        <div class="mes_text">
          <h4>受け取り評価をしてください</h4>
          <p>
            商品が発送されました。商品が到着したら出品者の評価をしてください。
          </p>
        </div>
      </div>
    </section>

    <div class="url">
      <a href="">取引についてFAQ ></a><br />
      <a href="">取引者のよくある質問 ></a>
    </div>

    <section class="evaluate_info">
      <h2>取引情報</h2>
      <div class="information">
        <img
          src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
          alt="information" width="" height="" />
        <div class="text">
          <p><?php echo $product['product_name']; ?></p>
          <p class="red">¥<?php echo $product['price']; ?></p>
        </div>
      </div>
    </section>

    <section class="user_info">
      <h2>出品者情報</h2>
      <div class="user">
        <a href="">
          <img
            src="./img/users/<?php echo $profile['user_id']; ?>/profile/<?php echo $profile['nickname']; ?>.<?php echo $profile['prof_img_extension']; ?>"
            alt="information" />
          <p><?php echo $profile['nickname']; ?></p>
          <p class="pink">></p>
        </a>
      </div>
      <button class="Evaluate_button">取引メッセージ</button>
    </section>

    <section class="value">
      <h2>評価</h2>
      <form method="post" action="" enctype="multipart/form-data">
        <div class="value_button">
          <div class="review">
            <div class="stars">
              <span>
                <input id="review01" type="radio" name="review" value="5"><label for="review01">★</label>
                <input id="review02" type="radio" name="review" value="4"><label for="review02">★</label>
                <input id="review03" type="radio" name="review" value="3"><label for="review03">★</label>
                <input id="review04" type="radio" name="review" value="2"><label for="review04">★</label>
                <input id="review05" type="radio" name="review" value="1"><label for="review05">★</label>
              </span>
            </div>
          </div>
        </div>
        <div class="comment">
          <p class="small_text">評価に際してコメントを記入しましょう。</p>
          <div class="mes_foryou">
            <input type="text" placeholder="この度はお取引ありがとうございました。" class="Evaluate_text">
          </div>
          <p>
            ※コメントは必要ではありませんが、お礼のメッセージなどを書くと喜ばれます
          </p>
          <button type="submit" name="submit_btn" value="up">送信する</button>
        </div>
      </form>
    </section>

  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>