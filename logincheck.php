<?php

    session_start();             
        if(!isset($_SESSION['users_name'])){
            echo "您还未登陆";
            exit();
        }else{echo '当前登录用户：' . $_SESSION['username']}
?>