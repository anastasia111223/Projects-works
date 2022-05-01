<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск тортов по цене</title>
    <link rel="stylesheet" href="/build/css/main.css">
</head>
<body>
    <?php if(isset($message)):?>
    <?= $message ?>
    <?php endif; ?>
    <form name="search" method="post" action="/search">
        <input type="text" placeholder="Минимальная цена торта" name="price1">
        <input type="text" placeholder="Максимальная цена торта" name="price2">
        <input type="submit" value="Отобрать торты по цене">
    </form>

    <script src="/build/js/main.js"></script>
</body>
</html>