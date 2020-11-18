<?php

if(!function_exists('getImage')) {

    function getImage($dir){  
            $image = scandir($dir);
            $itemImage = [];
            for($i = 0; $i < count($image); $i++) {
                if (($image[$i] != ".") && ($image[$i] != "..")) {
                    array_push($itemImage, $dir . $image[$i]);
                }
            }
            return $itemImage;    
        }
}
?>

	
