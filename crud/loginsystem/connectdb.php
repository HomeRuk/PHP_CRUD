<?php

    $dbcon = mysqli_connect('ap-cdbr-azure-southeast-a.cloudapp.net','bba43fb849e57c','12676c3a','sergoAxcNFBkFLx8');
    
    if (mysqli_connect_errno()) {
        echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้".  mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
