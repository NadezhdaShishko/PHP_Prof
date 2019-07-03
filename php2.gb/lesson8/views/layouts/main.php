<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/basket">Корзина</a> <span id="count"><?=$count?></span>

<? if ($auth): ?>
    Добро пожаловать <?=$username?> <a href="/user/logout/"> [Выход]</a>
<? else: ?>
    <form action="/user/login/" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<? endif; ?>
<br>

<?=$content?>
<script src="/js/main.js"></script>
</body>
</html>