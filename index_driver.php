<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $itemList = $dao->getItemList();
    //$_SESSION['itemList'] = $itemList;
    foreach ($itemList as $item){
        $tableRow = array('name' => $item['name']);
        echo $tableRow['name'];
    }
    
    //header('Location: http://localhost/php_todo3/index.php'); 
?>