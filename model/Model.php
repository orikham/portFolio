<?php
abstract class Model{

    private static $db;

    private static function setDb()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
        } catch (Exception $e) {
            die('erreur : ' . $e->getMessage());
        }

    }

    protected function getDb()
    {
        if(self::$db == null){
            self::setDb();
        }
        return self::$db;
    }
}
    


    ?>

