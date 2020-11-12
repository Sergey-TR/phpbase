<?php

/**Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».*/

$regional = array (
    "Московская область" => array ('Москва','Зеленоград','Клин', 'Можайск'),
    "Ленинградская область" => array ('Санкт-Петербург','Всеволжск','Павловск','Кронштадт'),
    "Рязанская область" => array ('Рязань','Касимов', 'Скопин','Кораблино')
     );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_8</title>
</head>
<body>
    <?php foreach ($regional as $oblast => $city) { ?> 
        <h3><?= $oblast ?></h3>
            <?php foreach ($city as $value) { 
                if (strstr ($value, 'К')) {?>
                <li><?= $value ?></li>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</body>
</html>