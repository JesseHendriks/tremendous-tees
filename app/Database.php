<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    protected static $instance = null;

    public static function connect()
    {
        $db_settings = [
            'host' => 'localhost',
            'name' => 'tremendous_tees',
            'user' => 'root',
            'pass' => '',
            'char' => 'utf8'
        ];

        if (self::$instance === null) {
            try {
                self::$instance = new PDO('mysql:host=' . $db_settings['host'] . ';dbname=' . $db_settings['name'] . ';charset=' . $db_settings['char'],
                    $db_settings['user'], $db_settings['pass']);
            } catch (PDOException $e) {
                self::$instance = null;
            }
        }

        return self::$instance;
    }
}
