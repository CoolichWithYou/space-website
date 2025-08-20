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
    <div class="header_line"></div>
    <div class="path">
        <div class="first">Главная /</div>
        <div class="second"><?= $item['title'] ?></div>
    </div>
    <div class="news">
        <div class="post">
            <div class="post_content">
                <div class="post_title"><?= $item['title'] ?></div>
                <div class="date"><?= date('d.m.Y', strtotime($item['date'])) ?></div>
                <div class="main_info"><?= $item['announce'] ?></div>
                <div class="general_content"><?= $item['content'] ?></div>
            </div>
            <div class="image"><img src=/images/<?= $item['image'] ?>></img></div>
        </div>
        <div class="back_button"><a href="/">← НАЗАД К НОВОСТЯМ</a></div>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>