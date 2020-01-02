<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $itemList = $dao->getItemList();
    
    foreach ($itemList as $item){
        $tableRow = array('name' => $item['name']);
        $tableRow['user'] = $item['user'];
        $tableRow['deadline'] = $item['deadline'];
        
        if (is_null($item['end_date'])){
            $tableRow['end_date'] = '未完了';
        }else{
            $tableRow['end_date'] = $item['end_date'];
        }

        $tableRows[] = $tableRow;
    }
        $_SESSION['itemList'] = $tableRows;

    header('Location: http://localhost/php_todo3/index.php'); 
?>