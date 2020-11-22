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

if(!function_exists('view')){

	/**
	* Рендер шаблона в строку
	* @param string $path - путь к шаблону в папке TPL_PATH без расширения файла
	* @param array $data - данные для шаблона (ключ - имя переменной)
	* @return string - строка вывода
	* @example view('forms/login', ['action' => '/login'])
	*/
	function view(string $path, array $data = []) : string {

		// Включение буферизации вывода
		ob_start();

		// Импортирует переменные из массива в текущую таблицу символов
		extract($data); 

		require VIEW_DIR . $path . '.php';

		// Возвращает содержимое буфера вывода
		$result = ob_get_contents();

		// Очистить (стереть) буфер вывода и отключить буферизацию вывода
		ob_end_clean();

		return $result;
	}
}

// if(!function_exists('writeLog')){

// 	/**
// 	* Запись в лог ошибок
// 	* @param string $message - логируемое сообщение
// 	* @param string $fileName - имя лог файла (опционально)
// 	* @return bool - статус записи
// 	* @example writeLog('Ахтунг! Все пропало!')
// 	*/
// 	function writeLog(string $message, string $fileName = 'errors') : bool {
// 		$filename = ROOT_DIR . '/data/logs/' . $fileName .  date('_Y_m_d') . '.log';
// 		$handle = fopen($filename, 'a');
// 		$log = $message . PHP_EOL;

// 		if(!fwrite($handle, $log)){
// 			return false;
// 		}

// 		return true;
// 	}

// }
// if(!function_exists('redirect')) {
//     function redirect(string $url) {
        
//         header("Location: {$url}");
//     }
// }
?>