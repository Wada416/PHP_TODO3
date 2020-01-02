<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $itemList = $dao->getItemList();
    //$_SESSION['itemList'] = $itemList;
    foreach ($itemList as $item){
        $tableRow = array('name' => $item['name']);
        $tableRow ['user'] = $item['user'];
        
        $tableRows[] = $tableRow;
    }
    
    foreach($tableRows as $row){
        echo $row['name'];
        echo $row['user'];
    }

    //header('Location: http://localhost/php_todo3/index.php'); 
?>