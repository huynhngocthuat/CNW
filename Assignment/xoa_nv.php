<?php 
    session_start();    
    if(isset($_SESSION["username"])){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "select * from nhanvien";
        $result = mysqli_query($link, $sql);
        echo '<table border = "1" width="100%">';
        echo '<caption>Du lieu truy xuat tu bang nhan vien</caption>';  
        echo '<TR> <TH>IDNV</TH> <TH>HoTen</TH> <TH>IDPB</TH> <TH>DiaChi</TH> </TR>';
        while($row=mysqli_fetch_array($result)){
            echo '<TR><TD>'.$row['id'].'</TD><TD>'.$row['hoTen'].'</TD><TD>'.$row['idPb'].'</TD><TD>'.$row['diaChi'].'</TD><TD align="center"><a href="xulixoa.php?IDNV='.$row['id'].'">...</a></TD></TR>';
        }
        echo '</TABLE>';
        mysqli_free_result($result);
        mysqli_close($link);
    }
    else
        echo "Bạn không thể truy cập !";
?>  