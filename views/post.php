<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<div class="container">
    <?php include 'templates/header.php'; ?>
    <div class="path">
        <div class="first">Главная /</div>
        <div class="second">Возвращение этнографа</div>
    </div>
    <div class="news">
        <div class="section_title">
            Новости
        </div>
        <div class="post">
            <h2><?= $item['title'] ?></h2>
            <p><?= $item['announce'] ?></p>
            <p><?= $item['content'] ?></p>
            <a href="/news/<?= $item['id'] ?>">Назад к новостям</a>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>