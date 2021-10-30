<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin cap nhập:</title>
</head>
<body>
    <h2>Danh sách sinh viên:</h2>
    <?php 
        for($i = 1; $i<=sizeof($studentList); $i++){
            echo "<p>".$studentList[$i]->id.".<a href='?idUpdate=".$studentList[$i]->id."'>".$studentList[$i]->name."</a></p>";
            echo "<p> Age: ".$studentList[$i]->age."</p>";
            echo "<p> University: ".$studentList[$i]->university."</p><br>";
        }
    ?>
    <p><a href="../index.html">Back</a></p>
</body>
</html>