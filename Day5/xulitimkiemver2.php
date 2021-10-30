<?php 
    $text = $_REQUEST['text'];
    $check = $_REQUEST['check'];
    if($text==""){
        header("Location:timkiemver2.php");
    }
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    if($check=="id"){
        $sql = "select * from nhanvien where id = '$text'" ;
    }else if($check=="hoTen"){
        $sql = "select * from nhanvien where hoTen = '$text'" ;
    }else 
        $sql = "select * from nhanvien where diaChi = '$text'" ;
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)==0) {
        header("Location:timkiemver2.php");
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