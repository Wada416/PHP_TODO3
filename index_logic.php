<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $itemList = $dao->getItemList();
    $_SESSION['itemList'] = $itemList;
    header('Location: http://localhost/php_todo3/index.php');
?>