<?php 
    $mapb = $_REQUEST['IDPB'];

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEUNEW");
    if($mapb==""){
        $sql = "select * from nhanvien" ;
    }else{
        $sql = "select * from nhanvien where idPb = '$mapb'" ;
    }
    $result = mysqli_query($link, $sql);
    echo '<table border = "1" width="100%">';
    echo '<caption>Tim kiem nhan vien</caption>';  
    echo '<TR> <TH>IDNV</TH> <TH>HoTen</TH> <TH>IDPB</TH> <TH>DiaChi</TH> </TR>';
    while($row=mysqli_fetch_array($result)){
        echo '<TR><TD>'.$row['id'].'</TD><TD>'.$row['hoTen'].'</TD><TD>'.$row['idPb'].'</TD><TD>'.$row['diaChi'].'</TD></TR>';
    }
    echo '</TABLE>';
    mysqli_free_result($result);
    mysqli_close($link);
?>  