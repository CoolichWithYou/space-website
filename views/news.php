<!DOCTYPE html>
<html>
<head>
    <title>Галактический вестник</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="stylesheet" href="/assets/news.css">
</head>
<body>
<div class="container">
    <?php include 'templates/header.php'; ?>
    <?php if (!empty($news)): ?>
        <?php $first = $news[0]; ?>
        <div class="slider"
             style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/images/<?= $first['image'] ?>')">

            <div class="post_slider">
                <div class="post_title">
                    <?= $first['title'] ?>
                </div>
                <div class="post_description">
                    <?= $first['announce'] ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="news">
        <div class="section_title">
            Новости
        </div>
        <div class="posts">
            <?php foreach ($news as $item): ?>
                <div class="post">
                    <div class="date"><?= date('d.m.Y', strtotime($item['date'])) ?></div>
                    <div class="info"><?= $item['title'] ?></div>
                    <div class="announce"><?= $item['announce'] ?></div>
                    <a class="more_info" href="/news/<?= $item['id'] ?>">
                        <div>ПОДРОБНЕЕ</div>
                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.004" height="13.322"
                             fill="currentColor">
                            <path d="M1.02 7.64 1 7.66c-.56 0-1-.44-1-1s.44-1 1-1l.02.02v1.96Zm23.56-.98-4.95-4.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l4.95-4.95Z"></path>
                            <path fill-rule="evenodd"
                                  d="m23.58 5.66-3.95-3.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l3.95-3.95H1c-.56 0-1-.44-1-1s.44-1 1-1h22.58Z"></path>
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <nav class="pagination">
        <div class="pages">
            <?php if ($current_page > 1): ?>
                <a class="jump_to_page" href="/?page=1">
                    <svg class="arrow left" xmlns="http://www.w3.org/2000/svg" width="27.004" height="13.322"
                         fill="currentColor">
                        <path d="M1.02 7.64 1 7.66c-.56 0-1-.44-1-1s.44-1 1-1l.02.02v1.96Zm23.56-.98-4.95-4.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l4.95-4.95Z"></path>
                        <path fill-rule="evenodd"
                              d="m23.58 5.66-3.95-3.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l3.95-3.95H1c-.56 0-1-.44-1-1s.44-1 1-1h22.58Z"></path>
                    </svg>
                </a>
            <?php endif; ?>

            <?php
            $start = max(1, $current_page - 2);
            $end = min($posts_count, $current_page + 2);

            for ($i = $start; $i <= $end; $i++): ?>
                <?php if ($i == $current_page): ?>
                    <div class="current_page"><?= $i ?></div>
                <?php else: ?>
                    <a class="page_num" href="/?page=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($current_page < $posts_count): ?>
                <a class="jump_to_page" href="/?page=<?= $posts_count ?>">
                    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.004" height="13.322"
                         fill="currentColor">
                        <path d="M1.02 7.64 1 7.66c-.56 0-1-.44-1-1s.44-1 1-1l.02.02v1.96Zm23.56-.98-4.95-4.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l4.95-4.95Z"></path>
                        <path fill-rule="evenodd"
                              d="m23.58 5.66-3.95-3.95a.99.99 0 0 1 0-1.42c.4-.39 1.02-.39 1.42 0l5.65 5.66c.4.39.4 1.02 0 1.41l-5.65 5.66c-.4.4-1.02.4-1.42 0-.4-.4-.4-1.02 0-1.41l3.95-3.95H1c-.56 0-1-.44-1-1s.44-1 1-1h22.58Z"></path>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </nav>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>