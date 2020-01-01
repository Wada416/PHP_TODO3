<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $data = $dao->findUser($_POST['id'],$_POST['pass']);

    if ($data != null){
        $userList = $dao->getUserList();
        $_SESSION['userList'] = $userList;
        $_SESSION['loginUser'] = $data['name'];
        header('Location: http://localhost/php_todo3/index_driver.php');
    }else{
        $_SESSION['msg'] = "ユーザーIDまたはパスワードが正しくありません";
        header('Location: http://localhost/php_todo3/error.php');
    }
?>