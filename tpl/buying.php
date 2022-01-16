<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/buy.css">
  <title>フクリマ 購入画面</title>
</head>

<body>
  <header class="global-header">
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <img class="header-logo" src="./img/icon/hukurima.png" alt="" width="" height="30px">
    <h2>購入手続き</h2>
  </header>
  <main>
    <h1>フクリマ</h1>
    
    <article>
      <h3>商品情報</h3>
      <section class="product-info">
        <p><img
            src="./img/users/<?php echo $line['user_id']; ?>/products/<?php echo $line['listing_id']; ?>/<?php echo $line['product_name']; ?>_1.<?php echo $line['img_extension']; ?>"
            alt="商品画像" width="70px" height="70px" /></p>
        <ul>
          <li><?php echo $line['product_name']; ?></li>
          <li class="brand"><?php echo $line['brand']; ?></li>
          <li class="red">¥<?php echo $line['price']; ?></li>
        </ul>
        <div><a href="product_detail.php?id=<?php echo $line['listing_id'];?>"><img src="./img/icon/進むアイコン.png"
              alt="進むボタン"></a></div>
      </section>

      <h3>出品者</h3>
      <section class="profile-section">
        <p><a href="profile?id=<?php echo $line['user_id'];?>"><img class="prof-img"
            src="./img/users/<?php echo $line['user_id'];?>/profile/<?php echo $profiles['nickname']; // 会員名 ?>.<?php echo $profiles['prof_img_extension'];?>"
            alt="プロフィール画像" width="30px" height="30px"></a></p>
        <p><?php echo $profiles['nickname'];?> さん</p>
        <p class="message-btn">メッセージ</p>
      </section>

      <h3>配送先</h3>
      <section class="address-section">
        <form action="" method="post">
          <ul>
            <?php // foreach($address as $address): ?>
            <li>
              <input type="radio" name="address" id="address<?php echo $address['address_id']; ?>"
                value="<?php echo $address['address_id']; ?>" checked>
              <label for="address<?php echo $address['address_id']; ?>">配送先<?php echo $address['address_id']; ?></label>
            </li>
            <li>〒<?php echo $address['zip']; ?></li>
            <li><?php echo $address['address']; ?></li>
            <?php // endforeach; ?>
            <li><label for=""><span>+</span>新しい配送先を追加する</label></li>
          </ul>
      </section>

      <h3>オプション</h3>
      <section class="option-section">
        <div>
          <input type="checkbox" name="cleaning_flg" id="cleaning">
          <label for="cleaning">クリーニングあり</label>
        </div>
        <div>
          <input type="checkbox" name="hanger_flg" id="hanger">
          <label for="hanger">ハンガーボックスあり</label>
        </div>
      </section>

      <h3>お支払金額</h3>
      <section class="pay-section">
        <ul>
          <ul>
            <li>商品代金</li>
            <li><?php echo $line['price']; ?><span>円</span></li>
          </ul>
          <ul>
            <li>オプション追加料金</li>
            <li>0<span>円</span></li>
          </ul>
          <ul>
            <li>合計</li>
            <li><?php echo $line['price']; ?><span>円</span></li>
          </ul>
        </ul>
      </section>
      
      <p class="center">
        <a href="">取引中止を申請する</a><br>
        <a href="">問題を報告する</a>
      </p>

    </article>
  </main>
  <footer>
    <button type="submit" name="buy_btn" value="on" class="btn buy-btn">購入する</button>
  </footer>
  </form>
</body>

</html>