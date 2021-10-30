<?php 
    $manv = $_REQUEST['txtmanv'];
    $hoten = $_REQUEST['txthoten'];
    if($manv=="" || $hoten==""){
        header("Location:timkiem.php");
    }
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    $sql = "select * from nhanvien where id = '$manv' and hoTen = '$hoten'" ;
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)==0) {
        header("Location:timkiem.php");
    }else{
        echo '<table border = "1" width="100%">';
        echo '<caption>Tim kiem nhan vien</caption>';  
        echo '<TR> <TH>IDNV</TH> <TH>HoTen</TH> <TH>IDPB</TH> <TH>DiaChi</TH> </TR>';
        while($row=mysqli_fetch_array($result)){
            echo '<TR><TD>'.$row['id'].'</TD><TD>'.$row['hoTen'].'</TD><TD>'.$row['idPb'].'</TD><TD>'.$row['diaChi'].'</TD></TR>';
        }
        echo '</TABLE>';
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>  