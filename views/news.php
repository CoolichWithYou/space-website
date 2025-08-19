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
    <?php if (!empty($news)): ?>
        <?php $first = $news[0]; ?>
        <div class="slider" style="background-image: url('/images/<?= $first['image'] ?>')">

            <div class="post_slider">
                <div class="post_title">
                    <?= $first['title'] ?>
                </div>
                <div class="description">
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
                    <h2><?= $item['title'] ?></h2>
                    <p><?= $item['announce'] ?></p>
                    <div class="info_container">
                        <a class="more_info" href="/news/<?= $item['id'] ?>">Подробнее →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav class="pagination">
            <?php if ($current_page > 1): ?>
                <a href="/?page=1">←</a>
            <?php endif; ?>

            <?php
            $start = max(1, $current_page - 2);
            $end = min($posts_count, $current_page + 2);

            for ($i = $start; $i <= $end; $i++): ?>
                <?php if ($i == $current_page): ?>
                    <strong><?= $i ?></strong>
                <?php else: ?>
                    <a href="/?page=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($current_page < $posts_count): ?>
                <a href="/?page=<?= $posts_count ?>">→</a>
            <?php endif; ?>
        </nav>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>