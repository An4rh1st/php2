<?php
    require_once "includes/connection.php";
    $id = $_GET["id"];
    $user = R::load('users', $id);
    // $user = R::findOne('users', 'id = ?', [$id]);
?>
<form action="includes/save_edit.php" method="post">
    <p>Изменить никнейм</p>
    <input type="hidden" name="id" value="<?= $user["id"]?>">
    <input type="text" name="name" value="<?= $user["name"]?>">
    <p>Изменить логин</p>
    <input type="text" name="login" value="<?= $user["login"]?>">
    <p>Изменить пароль</p>
    <input type="text" name="password" value="<?= $user["password"]?>">
    <p>Изменить email (необязательно)</p>
    <input type="email" name="email" value="<?= $user["email"]?>"><br><br>
    <button type="submit">Сохранить изменения</button>
</form>