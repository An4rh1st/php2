<table>
    <tr>
        <th>Никнейм</th>
        <th>Логин</th>
        <th>Пароль</th>
        <th>email</th>
    </tr>
    <?php
    require_once "includes/connection.php";
    $users = R::findAll('users');
    // echo '<pre>';
    // print_r($users);
    // echo '</pre>';
    foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user["name"]?></td>
            <td><?= $user["login"]?></td>
            <td><?= $user["password"]?></td>
            <td><?= $user["email"]?></td>
            <td><a href="user.php?id=<?= $user["id"]?>">Открыть отдельно</a></td>
            <td><a href="edit.php?id=<?= $user["id"]?>">Изменить</a></td>
            <td><a href="delete.php?id=<?= $user["id"]?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>

<form action="includes/create.php" method="post">
    <p>Введите никнейм</p>
    <input type="text" name="name">
    <p>Введите логин</p>
    <input type="text" name="login">
    <p>Введите пароль</p>
    <input type="password" name="password">
    <p>Введите email (необязательно)</p>
    <input type="email" name="email"><br><br>
    <button type="submit">Войти</button>
</form>