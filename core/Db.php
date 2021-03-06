<?php
class Db {
    
    public static function getConnection() {
        
        $params = include(ROOT.'/config/db_params.php'); 
        
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->query('SET NAMES UTF8');
        
        return $db;
    }
}
