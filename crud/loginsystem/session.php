<?php
        session_start();
        if (!isset($_SESSION['login_id'])) {
            header("Location: loginsystem/index.php");
        }
        require 'connectdb.php';
        $session_login_id = $_SESSION['login_id'];
        
        $qry_user = "SELECT * FROM tb_login WHERE login_id='$session_login_id'";
        $result_user = mysqli_query($dbcon,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_login_username = $row_user['login_username'];
            mysqli_free_result($result_user);
        }
        mysqli_close($dbcon);