<?php 
    session_start();
    if($_SESSION["username"] != ""){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "select * from phongban";
        $result = mysqli_query($link, $sql);
        echo '<table border = "1" width="100%">';
        echo '<caption>Du lieu truy xuat tu bang phong ban</caption>';  
        echo '<TR> <TH>IDPB</TH> <TH>TenPB</TH> <TH>MoTa</TH> <TH>Cap nhap</TH> </TR>';
        while($row=mysqli_fetch_array($result)){
            echo '<TR><TD>'.$row['id'].'</TD><TD>'.$row['tenPb'].'</TD><TD>'.$row['moTa'].'</TD><TD align="center"><a href="form_capnhap.php?IDPB='.$row['id'].'">xxx</a></TD></TR>';
        }
        echo '</TABLE>';
        mysqli_free_result($result);
        mysqli_close($link);
    }
    else
        echo 'Bạn không thể truy cập !!';
    
?>  