<?php
/**
 * 
 */
if(!function_exists('getConnect')) {
    function getConnect () {
        $config = include('../config/db_connect/connect.php');

       static $connection = null;
       if (is_null($connection)) {

       $connection = mysqli_connect(
            $config['host'], 
            $config['user'], 
            $config['pass'], 
            $config['db'], 
            $config['port']);
       }      
        return $connection;
    }
}
/**
 * 
 */
if(!function_exists('queryOne')) {
    function queryOne (string $sql) {
        return queryAll($sql)[0];
    }
}
/**
 * 
 */
if(!function_exists('queryAll')) {
    function queryAll (string $sql) {

        $result = mysqli_query(getConnect(), $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
}
/**
 * 
 */
if(!function_exists('execute')) {
    function execute (string $sql): int {

        $result = mysqli_query(getConnect(), $sql);
        return mysqli_affected_rows (getConnect());
    }
}

?>