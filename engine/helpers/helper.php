<?php

if(!function_exists('abort')) {

	function abort(int $code) {
		http_response_code($code);
		require(VIEW_DIR . $code. '.php');
		exit;
	}
}
/**
 * функция чтобы не писать постоянно isset(), украл у Вас
 */
if(!function_exists('array_get')){

    function array_get(array $array, string $key, $default = null){
        return isset($array[$key]) ? $array[$key] : $default;
    }
    
    }

if(!function_exists('array_clean')) {

    /**
     * тоже украл
     * Clean array (htmlspecialchars & strip_tags)
        * @param array $arr
        * @return array
        **/
    function array_clean(array $arr):array {
    
        return array_map(function($it){
    
            if(is_array($it)){
                return array_clean($it);
            }
    
            return is_string($it) ?  strip_tags(htmlspecialchars($it)) : $it;
        }, $arr);
    }
    
}
// if(!function_exists('redirect')) {
//     function redirect(string $url) {
        
//         header("Location: {$url}");
//     }
// }
?>