<?php
function getConnection()
{
    $host = getenv('MYSQL_HOST') ?: '127.0.0.1';
    $port = getenv('MYSQL_PORT') ?: 3306;
    $user = getenv('MYSQL_USER') ?: 'user';
    $pass = getenv('MYSQL_PASSWORD') ?: 'password';
    $db_name   = getenv('MYSQL_DATABASE') ?: 'mydb';

    $conn = new mysqli($host, $user, $pass, $db_name, $port);
    if ($conn->connect_error) die("Ошибка подключения: " . $conn->connect_error);
    return $conn;
}
