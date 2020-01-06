<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $dao->deleteItem($_POST['id']);
    header('Location: http://localhost/php_todo3/index_driver.php');
?>