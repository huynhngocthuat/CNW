<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm sinh viên</title>
</head>
<body>
    <h2>Kết quả tìm thấy:</h2>
    <?php 
        for($i = 1; $i<=sizeof($studentList); $i++){
            // echo $studentList[$i]->id;
            echo "<p>".$studentList[$i]->id.".".$studentList[$i]->name."</p>";
            echo "<p> Age: ".$studentList[$i]->age."</p>";
            echo "<p> University: ".$studentList[$i]->university."</p><br>";
        }
    ?>
    <p><a href="../index.html">Back</a></p>
</body>
</html>