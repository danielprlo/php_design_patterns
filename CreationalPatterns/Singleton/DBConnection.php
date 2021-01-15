<?php


class DBConnection
{
    private static $instance = null;

    private function __construct() {
        echo "New object created \n";
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new static();
        } else {
            echo "Using same object \n";
        }

        return self::$instance;
    }

}
