<?php

use controllers\NewsController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$query = [];
parse_str($_SERVER['QUERY_STRING'] ?? '', $query);

if ($uri === '/') {
    require 'controllers/NewsController.php';
    $controller = new NewsController();
    $page = isset($query['page']) ? (int)$query['page'] : 1;
    $controller->list($page);

} elseif (preg_match('#^/news/(\d+)$#', $uri, $matches)) {
    require 'controllers/NewsController.php';
    $controller = new NewsController();
    $id = (int)$matches[1];
    $controller->show($id);
}