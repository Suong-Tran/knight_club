<?php

//namespace models;
namespace Webappdev\Knightsclub\models;
Use PDO;

class Database
{

    private static $user = 'suongtra_php-knight';
    private static $pass = 'yangyoseob102';
    private static $dsn = 'mysql:host=localhost;dbname=suongtra_php_knight';
    private static $dbcon;

    /*private static $user = 'root';
    private static $password = '';
    private static $dsn = 'mysql:host=localhost;dbname=knightsclub';
    private static $dbconn;*/

    private function __construct()
    {
    }

    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e) {
                $msg = $e->getMessage();
                //include './custom-error.php';
                exit();
            }
        }

        return self::$dbcon;
    }
}
