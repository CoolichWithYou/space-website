<?php
function getConnection()
{
    $host = "127.0.0.1";
    $port = 3301;
    $user = "user";
    $pass = "password";
    $db = "mydb";

    $conn = new mysqli($host, $user, $pass, $db, $port);
    if ($conn->connect_error) die("Ошибка подключения: " . $conn->connect_error);
    return $conn;
}
