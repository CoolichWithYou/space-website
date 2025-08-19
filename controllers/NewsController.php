<?php

namespace controllers;

require_once __DIR__ . '/../models/News.php';

use models\News;

class NewsController
{
    public function list($page)
    {
        $news = News::paginate($page);
//        $posts_count = ceil(News::countPosts() / 4);
        require __DIR__ . '/../views/news.php';
    }

    public function show($id)
    {
        $item = News::find($id);
        if (!$item) {
            http_response_code(404);
            echo "Новость не найдена";
            return;
        }
        require __DIR__ . '/../views/post.php';
    }
}