<?php 
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from user";
    $result = mysqli_query($link, $sql);
    echo '<table border = "1" width="100%">';
    echo '<caption>Du lieu truy xuat tu bang User</caption>';  
    echo '<TR> <TH>MSSV</TH> <TH>Name</TH> <TH>Birthday</TH> <TH>Job</TH> </TR>';
    while($row=mysqli_fetch_array($result)){
        echo '<TR><TD>'.$row['MSSV'].'</TD><TD>'.$row['Name'].'</TD><TD>'.$row['Birthday'].'</TD><TD>'.$row['Job'].'</TD></TR>';
    }
    echo '</TABLE>';
    mysqli_free_result($result);
    mysqli_close($link);
?>  