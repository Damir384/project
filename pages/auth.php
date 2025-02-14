<p>Введите логин и пароль </p>
<form action="" method="post">
    <input type="text" name="login" id="" placeholder="Введите логин"> <br>
    <input type="password" name="pass" id="" placeholder="Введите пароль"> <br>
    <button type="submit" name="entry">Войти</button>
</form>
<?
    if($_SESSION['auth']['answer']){
        echo $_SESSION['auth']['answer'];
        unset($_SESSION['auth']);
    }
?>


<? print_r($_POST)?>