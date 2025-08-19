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
    <div class="slider">
        <?php if (!empty($news)): ?>
            <?php $first = $news[0]; ?>
            <div class="post_slider">
                <div class="post_title">
                    <?= htmlspecialchars($first['title']) ?>
                </div>
                <div class="description">
                    <?= htmlspecialchars($first['announce']) ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="news">
        <div class="section_title">
            Новости
        </div>
        <div class="posts">
            <?php foreach($news as $item): ?>
                <div class="post">
                    <h2><?= htmlspecialchars($item['title']) ?></h2>
                    <p><?= htmlspecialchars($item['announce']) ?></p>
                    <a href="/news/<?= $item['id'] ?>">Подробнее -></a>
                </div>
            <?php endforeach; ?>
        </div>
        <nav class="pagination">
            <?php if ($page > 1): ?>
                <a href="/?page=<?= $page - 1 ?>">Назад</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $posts_count; $i++): ?>
                <?php if ($i == $posts_count): ?>
                    <strong><?= $i ?></strong>
                <?php else: ?>
                    <a href="/?page=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($posts_count < $page): ?>
                <a href="/?page=<?= $posts_count + 1 ?>">Вперёд</a>
            <?php endif; ?>
        </nav>
    </div>
    <?php include 'templates/footer.php'; ?>
</div>
</body>
</html>