<?php

namespace models;
require_once __DIR__ . '/../db/get_connection.php';

class News
{
//    public static function countPosts(){
//        $conn = getConnection();
//        $stmt = $conn->prepare("SELECT count(*) FROM news");
//        $stmt->execute();
//        return $stmt->get_result()->fetch_row();
//    }
    public static function paginate($page)
    {
        $conn = getConnection();
        $offset = ($page - 1) * 4;
        $stmt = $conn->prepare("
            SELECT id, date, title, announce 
            FROM news 
            ORDER BY date DESC 
            LIMIT 4 OFFSET ?
        ");
        $stmt->bind_param("i", $offset);
        $stmt->execute();

        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT * FROM news WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}