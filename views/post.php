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
            <a class="first" href="/">Главная</a>
            <div>/</div>
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
                        <div class="content"><?= $item['content'] ?></div>
                    </div>
                </div>

                <a class="back_button" href="/">
                    <svg class="arrow left" xmlns="http://www.w3.org/2000/svg" width="27.004" height="13.322"
                         fill="currentColor">
                        <path d="M1.02 7.64 1 7.66c-.56 0-1-.44-1-1s.44-1 1-1l.02.02v1.96Zm23.56-.98-4.95-4.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l4.95-4.95Z"></path>
                        <path fill-rule="evenodd"
                              d="m23.58 5.66-3.95-3.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l3.95-3.95H1c-.56 0-1-.44-1-1s.44-1 1-1h22.58Z"></path>
                    </svg>
                    НАЗАД К НОВОСТЯМ</a>
            </div>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>