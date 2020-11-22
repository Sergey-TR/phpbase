<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: black;">
<div style="display: flex; align-items: center; justify-content: center; 
            height: 100vh; background-color: black;">
            <!-- <form method="POST" action="" style="display: flex;"> -->
    <div style="display: flex; align-items: center; justify-content: center; 
                flex-direction:column;">
        <img src="/img/<?= $imageId['route'] ?>" alt="">
        <div style="display: flex; align-items: center;justify-content: space-between; 
                width: 100%; margin-top: 10px;">
            <div>
                <span style="color: white; 
                font-size: 20px; font-weight: bold;">rating <?= $imageId['views'] ?></span>
            </div>
            <div>
                <a href="/catalog" style="text-decoration: none; color: white; 
                font-size: 20px; cursor: pointer; font-weight: bold;">back</a>
            </div>
        </div>
    </div>
            <div style="display: flex; align-items: center; justify-content: center; 
                flex-direction:column; max-width: 400px;">
                <div style=" display: flex; align-items: center; justify-content: center; 
                            flex-direction:column; color: white; margin-left: 20px;">
                            <p>НАИМЕНОВАНИЕ: <span style="font-size: 20px; 
                            text-transform: uppercase; padding-left: 10px;"><?= $imageId['title'] ?></span></p>
                            <p>ЦЕНА: <span style="font-size: 20px; 
                            text-transform: uppercase; padding-left: 100px; padding-right: 10px;">
                            <?= $imageId['price'] ?></span>$</p>
                            <p>ОПИСАНИЕ</p>
                            <span style="font-size: 20px; 
                            text-transform: uppercase;"><?= $imageId['description'] ?></span>
                </div>
                <div>
                    <h3 style="color: white;"> оставить отзыв </h3>
                    <form method="POST" action="">
                        <!-- <input type="text" name="login" placeholder="имя" style="min-width: 200px;
                                height: 30px;
                                font-size: 20px; margin-bottom: 5px;"><br>
                        <input type="email" name="email" placeholder="email" style="min-width: 200px;
                                height: 30px;
                                font-size: 20px;margin-bottom: 5px; "><br>
                        <input type="password" name="pass" placeholder="пароль" style="min-width: 200px;
                                height: 30px;
                                font-size: 20px; margin-bottom: 5px;"><br>
                        <label for="check" style="color: white;">
                        <input id="check" type="checkbox" name="checkbox">отправить без регистрации</label><br> -->
                        <!-- <p style="color: white;">ОТЗЫВ<Br> -->
                            <textarea name="comment" cols="40" rows="5"></textarea><br>
                        <button style="width: 100px; height: 40px; margin-top: 10px; cursor:pointer; " type="submit">отправить</button>

                    </form>
                </div>
                <!-- </form> -->
            </div>
</div> 
            <h2 style="color: white; text-align: center;">ОТЗЫВЫ</h2>
            <div style="border: 2px solid white; height: 200px;">
            <?php foreach ($text as $value) { ?>
                <p style="color: white; font-size: 18px; padding-left: 15px;"><?= $value['id'] . '.' . ' ' . $value['body'] ?></p>
            <?php } ?>
                
            </div>
</body>
</html>


