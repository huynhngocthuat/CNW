<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "select * from admin where username = '$username' and password = '$password'" ;
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)==0) {
        session_unset(); 
        session_destroy();
        header("Location:login.html");
    }else{
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location:capnhapPb.php");
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>  