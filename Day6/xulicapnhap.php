<?php 
    $id = $_REQUEST['id'];
    $tenPb = $_REQUEST['tenPb'];
    $moTa = $_REQUEST['moTa'];

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "update phongban set tenPb = '$tenPb', moTa = '$moTa' where id = '$id';" ;
    if (mysqli_query($link, $sql)) {
        header("Location:capnhap.php");
      } else {
        echo "Error updating record: " . $link->error;
      }
    
    mysqli_free_result($result);
    mysqli_close($link);
?>  