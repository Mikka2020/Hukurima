<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/favorite_list.css">
  <title>Document</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <h2>いいねした商品一覧</h2>
  </header>

  <nav class="sort-nav">
    <ul>
      <li>並び替え</li>
      <li>絞り込み</li>
    </ul>
  </nav>

  <main>
    <?php foreach($listing_arr as $value):?>
    <section>
      <p class="product-img">
        <img
          src="./img/users/<?php echo $value['listing_user_id'];?>/products/<?php echo $value['base_listing_id'];?>/<?php echo $value['product_name'] ;?>_1.<?php echo $value['img_extension'];?>"
          alt="商品画像" width="70px" height="70px">
        <img src="./img/icon/SOLDマーク.png" alt="購入済みマーク"
          class="sold-mark <?php echo $value['dealing_flg'] == 9 ? "" : "none" ;?>">
      </p>
      <ul>
        <li class="product-name"><?php echo $value['product_name']; ?></li>
        <li class="product-price">¥<?php echo $value['price']; ?></li>
      </ul>
      <form action="listed_history.php?id=<?php echo $value['listing_id']; ?>" method="post">
        <button type="submit" name="listed_id" value="<?php echo $value['listed_id'];?>"><img
            src="./img/icon/進むアイコン.png" alt="進むボタン"></button>
      </form>
    </section>
    <?php endforeach;?>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>