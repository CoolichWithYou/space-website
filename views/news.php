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
        <div class="slider" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/images/<?= $first['image'] ?>')">

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
                    <p><?= $item['announce'] ?></p>
                    <div class="info_container">
                        <a class="more_info" href="/news/<?= $item['id'] ?>">Подробнее →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <nav class="pagination">
        <div class="pages">
            <?php if ($current_page > 1): ?>
                <a class="jump_to_page" href="/?page=1">←</a>
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
                <a class="goto" href="/?page=<?= $posts_count ?>">→</a>
            <?php endif; ?>
        </div>
    </nav>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>