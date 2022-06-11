<?php
    require_once "connection.php";
    $id = $_POST["id"];
    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    $user = R::load('users', $id);
    // $user = R::findOne('users', 'id = ?', [$id]);

    $user["name"] = $name;
    $user["login"] = $login;
    $user["password"] = $password;
    $user["email"] = $email;

    R::store($user);
    
    header("Location: ../index.php");
    die();
?>