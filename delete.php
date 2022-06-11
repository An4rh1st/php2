<?php
    require_once "includes/connection.php";
    $id = $_GET["id"];
    
    $user = R::load('users', $id);
    // $user = R::findOne('users', 'id = ?', [$id]);
    R::trash($user);
    
    header("Location: ../index.php");
    die();