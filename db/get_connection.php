<?php
function getConnection()
{
    $host = getenv('MYSQL_HOST');
    $port = getenv('MYSQL_PORT');
    $user = getenv('MYSQL_USER');
    $pass = getenv('MYSQL_PASSWORD');
    $db_name   = getenv('MYSQL_DATABASE');

    $conn = new mysqli($host, $user, $pass, $db_name, $port);
    if ($conn->connect_error) die("Ошибка подключения: " . $conn->connect_error);
    return $conn;
}
