<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КОРЗИНА</title>
    <link rel="stylesheet" href="layout/style_cart.css" type="text/css" />
    <script src="https://kit.fontawesome.com/b56179660f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="heading center">
        <h4 class="heading_photo">ФОТО</h4>
        <h4 class="heading_name">НАИМЕНОВАНИЕ</h4>
        <h4 class="heading_h3">ЦЕНА</h4>
        <h4 class="heading_h3">КОЛИЧЕСТВО</h4>
        <h4 class="heading_h3">СУММА</h4>
        <h4 class="heading_h3">УДАЛИТЬ</h4>
    </div>
    <div class="cart-box center">
        <?php foreach ($basket as $value) { ?>

            <div class="cartItem">
                <div class="cartItem_img">
                    <img class="imgs" src="/img/<?= $value['product']['route'] ?>" alt="photo">
                </div>
                <div class="cartItem_name">
                    <p class="cartItem_acount"><?= $value['product']['title'] ?></p>
                </div>
                <div class="cartItem_price">
                    <span class="cartItem_acount"><?= $value['product']['price'] ?></span>
                </div>
                <div class="cartItem_qty">
                    <!-- <span class="qty_inp"><?= $value['qty']  ?></span> -->
                    <form class="changeItem" method="POST" action="/basket">

                        <button type="submit" class="qty_btn" value="<?= $value['product']['id'] ?>" name="minus">-</button>
                        <span class="qty_inp"><?= $value['qty']  ?></span>
                        <button type="submit" class="qty_btn" value="<?= $value['product']['id'] ?>" name="plus">+</button>
                    </form>
                </div>
                <div class="cartItem_total">
                    <span class="qty_qty"><?= $value['product']['price'] * $value['qty'] ?></span>
                </div>
                <div class="cartItem_clear">

                    <button type="submit" class="qty_btn" name="reset" value="<?= $value['product']['id'] ?>">X</button>

                </div>
            </div>
        <?php }  ?>

    </div>
</body>

</html>