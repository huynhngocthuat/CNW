<?php 
    $id = $_REQUEST['IDNV'];

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "delete from nhanvien where id = '$id'" ;
    if (mysqli_query($link, $sql)) {
        header("Location:xoa_nv.php");
      } else {
        echo "Error updating record: " . $link->error;
      }
    
    mysqli_free_result($result);
    mysqli_close($link);
?>  