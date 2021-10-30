<?php 
    $id = $_REQUEST['id'];
    $hoTen = $_REQUEST['hoTen'];
    $idPb = $_REQUEST['idPb'];
    $diaChi = $_REQUEST['diaChi'];

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "insert into nhanvien values($id,'$hoTen','$idPb','$diaChi')" ;
    if (mysqli_query($link, $sql)) {
        header("Location:xemthongtinnv.php");
      } else {
        header("Location:chen.php");
        echo 'hihi';
      }
    
    mysqli_free_result($result);
    mysqli_close($link);
?>  