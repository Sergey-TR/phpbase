<?php

require('../engine/helpers/db/db.php');
require('../engine/helpers/db/sql_prod_img.php');

$id = (int) $_GET ["id"];

$imageId = getImageById ($id); 
updateViewsImage ($id);

include('../views/photo.php');

?>

