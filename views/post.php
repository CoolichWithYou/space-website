<!DOCTYPE html>
<html>
<head>
    <title>Галактический вестник</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="stylesheet" href="/assets/post.css">
</head>
<body>
<div class="container">
    <?php include 'templates/header.php'; ?>
    <div class="header_line"></div>
    <div class="news">
        <div class="path">
            <div class="first">Главная</div>
            <div class="first">/</div>
            <div class="second"><?= $item['title'] ?></div>
        </div>
        <div class="post">
            <div class="post_content">
                <div class="post_title"><?= $item['title'] ?></div>
                <div class="date"><?= date('d.m.Y', strtotime($item['date'])) ?></div>

                <div class="balanced">
                    <div class="image-wrapper">
                        <img class="image" src="/images/<?= $item['image'] ?>">
                    </div>
                    <div class="general_content">
                        <div class="main_info"><?= $item['announce'] ?></div>
                        <div><?= $item['content'] ?></div>
                    </div>
                </div>

                <a class="back_button" href="/">← НАЗАД К НОВОСТЯМ</a>
            </div>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>