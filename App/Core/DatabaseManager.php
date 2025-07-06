<?php
namespace App\Core;

use MongoDB;

class DatabaseManager {
    protected static $DB_URI;
    protected static $DB_DATABASE;
    protected static $instance;
    protected static $dbClient;
    protected static $database;

    public function __construct() {
        $env = parse_ini_file(__DIR__ . '/../../.env');
        self::$DB_URI = $env['DB_URI'];
        self::$DB_DATABASE = $env['DB_DATABASE'];
        self::$dbClient = new MongoDB\Client(self::$DB_URI);
    }

    private function __clone() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Self();
        }
        return self::$instance;
    }

    public static function getDatabase() {
        self::$database = null;
        if (!self::$database) {
            self::$database = self::$dbClient->selectDatabase(self::$DB_DATABASE);
        }
        return self::$database;
    }
}
?>