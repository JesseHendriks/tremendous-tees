<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;

    private function __construct()
    {
        $db_settings = [
            'host' => 'localhost',
            'name' => 'tremendous_tees',
            'user' => 'root',
            'pass' => '',
            'db_charset' => 'UTF-8',
        ];
        try {
            self::$instance = new PDO('mysql:host=' . $db_settings['host'] . ';dbname=' . $db_settings['name'] . ';charset=utf8',
                $db_settings['user'], $db_settings['pass']);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            self::$instance->query('SET NAMES utf8');
            self::$instance->query('SET CHARACTER SET utf8');
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public static function connect()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
