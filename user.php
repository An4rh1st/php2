<?php
    require_once "includes/connection.php";
    $id = $_GET["id"];
    // $user = R::load('users', $id);
    $user = R::findOne('users', 'id = ?', [$id]);
    if ($user["name"] === NULL) {
        echo '<h1>404 подьзователь не найден</h1>';
        die();
    }
?>
<h1><?= $user["name"]?></h1>
<p><?= $user["login"]?></p>
<p><?= $user["password"]?></p>
<i><?= $user["email"]?></i>