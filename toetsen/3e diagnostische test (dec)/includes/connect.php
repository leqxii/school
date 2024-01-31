<?php
if (!function_exists('connect')) {
    function connect() {
        $hostname = 'localhost';
        $dbname = 'top2000';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$hostname;dbname=$dbname";

        try {
            return new PDO($dsn, $username, $password);
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }
}
?>
