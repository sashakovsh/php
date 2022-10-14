<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1>Главная</h1>
    <nav>

        <?php if($username === null) : ?>
        <a href="/?controller=security">Авторизация</a>
        <?php else: ?>
        <h2>Добро пожаловать, <?=$username?>! <a href="/?action=logout&controller=security">выход</a></h2>
        <a href="/?controller=todo">Перейти в задачи</a>
        <?php endif ?>
    </nav>
</body>