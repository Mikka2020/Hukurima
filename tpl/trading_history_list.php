<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/trading_history_list.css">
  <title>フクリマ 取引一覧</title>
</head>
<body>
  <h1>フクリマ</h1>

  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <h2>取引一覧</h2>
  </header>

  <nav class="sort-nav">
    <ul>
      <li>並び替え</li>
      <li>絞り込み</li>
    </ul>
  </nav>

  <main>
    <?php foreach($dealing_arr as $value):?>
    <section>
      <p class="product-img"><img src="./img/users/<?php echo $value['user_id'];?>/products/<?php echo $value['listing_id'];?>/<?php echo $value['product_name'] ;?>_1.<?php echo $value['img_extension'];?>" alt="商品画像" width="70px" height="70px"></p>
      <ul>
        <li class="trading-state <?php echo $value['dealing_state'];?>">取引中</li>
        <li class="product-name"><?php echo $value['product_name'];?></li>
        <li class="product-price">¥<?php echo $value['price'];?></li>
      </ul>
      <form action="trading.php" method="post">
        <button type="submit" name="dealing_id" value="<?php echo $value['dealing_id'];?>"><img src="./img/icon/進むアイコン.png" alt="進むボタン"></button>
      </form>
      <!-- <div><a href="trading.php"><img src="./img/icon/進むアイコン.png" alt="進むボタン"></a></div> -->
    </section>
    <?php endforeach;?>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>



  
</body>
</html>