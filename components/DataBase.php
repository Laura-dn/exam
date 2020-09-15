<?php

class DataBase
{
    public static function getDBConnection()
    {
        $dbConfig = include(ROOT . '/config/dbparams.php');
        $dsn = "mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['db'] . ";charset=" . $dbConfig['ch'];

        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $cursor = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $opt);

        return $cursor;
    }
}
