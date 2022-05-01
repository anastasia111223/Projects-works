<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление торта</title>
    <link rel="stylesheet" href="/build/css/main.css">
</head>
<body>
    <?php if(isset($message)):?>
    <?= $message ?>
    <?php endif; ?>
    <form method="post" action="/addcake" enctype="multipart/form-data">
        <input type="text" placeholder="Название торта" name="name_c">
        <input type="text" placeholder="Цена торта" name="price">
        <input type="file" placeholder="Изображение торта" name="image" accept="image/*">
        <input type="submit" value="Добавить новый торт">
</form>
</body>
</html>