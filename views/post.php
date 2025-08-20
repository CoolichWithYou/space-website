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
        <div class="post">
            <div class="date"><?= date('d.m.Y', strtotime($item['date'])) ?></div>
            <div class="title"><?= $item['title'] ?></div>
            <div class="main_info"><?= $item['announce'] ?></div>
            <div class="general_content"><?= $item['content'] ?></div>
            <a href="/">Назад к новостям</a>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>