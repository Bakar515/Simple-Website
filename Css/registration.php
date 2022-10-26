<?php
    session_start();

    $con = mysqli_connect('localhost','sa', 'Bkr1122@');

    mysqli_select_db($con,'Users');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from Users where name = ''";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "User Already Taken";
    }else{
        $reg = "Insert into user";
    }
?>