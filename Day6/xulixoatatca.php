<?php 
    $ids = $_REQUEST['IDNVS'];

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    foreach($ids as $id) {
        $sql = "delete from nhanvien where id = '$id'";
        $result = mysqli_query($link, $sql);
    } 
    header("Location:xoatatca.php");
    mysqli_close($link);
?>  