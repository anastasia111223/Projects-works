<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/build/css/main.css">
</head>
<body>
<header>
    <nav>
        <a href="/">Главная</a>
        <a href="/addcake">Добавить торт</a>
        <a href="/search">Поиск по цене</a>
    </nav>
</header>

<main>
    <?php if(isset($message)):?>
    <?= $message ?>
    <?php endif; ?>
    <? foreach ($cakes as $cake): ?>
    <div class="cake">
        <h2><?= $cake['name_cake'] ?></h2>
        <div>
            <img src="/image/<?= $cake['image_path'] ?>">
        </div>
        <p>Стоимость: <?= $cake['price'] ?></p>
        <button data-id="<?= $cake['id'] ?>"
        class="infoCake">Подробнее</button>
        <!-- <button data-id="">Удалить торт</button> -->
    </div>
    <? endforeach; ?>
    <section>

    </section>

</main>
<script src="/build/js/main.js"></script>
</body>
</html>