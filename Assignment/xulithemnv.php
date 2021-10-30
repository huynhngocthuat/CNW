<?php 
    $id = $_REQUEST['id'];
    $hoTen = $_REQUEST['hoTen'];
    $idPb = $_REQUEST['idPb'];
    $diaChi = $_REQUEST['diaChi'];
    if($id=="" || $hoTen=="" || $idPb=="" || $diaChi==""){
      header("Location:themnv.php");
    }else{
      $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "insert into nhanvien values($id,'$hoTen','$idPb','$diaChi')" ;
    if (mysqli_query($link, $sql)) {
        header("Location:xemthongtinnv.php");
      } else {
        header("Location:themnv.php");
      }
    
    mysqli_free_result($result);
    mysqli_close($link);
    }
    
?>  