<? if ($auth) : ?>
    Добро пожаловать <strong><?= $username ?></strong>!
    <a href="/user/logout/" id="logout">Выход</a><br>
<?else:?>
    <form action="/user/login/" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<?endif;?>

<!-- <a href="/basket"></a>

<? if (!$auth): ?>
    <h2>Авторизация:</h2>
    <form action="/users/user" method="post">
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="pass" placeholder="Пароль"><br>
        <input type="checkbox" name="save" id="save">
        <label for="save">Сохранить пароль</label>
        <input type="submit" name="submit" value="Войти">
    </form>
<? endif; ?> -->
