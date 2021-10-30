<?php 
include_once("Entity_Student.php");
class Model_Student{
    public function __construct(){}
    public function getAllStudent(){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "select * from student";
        $result = mysqli_query($link, $sql);
        $i = 0;
        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            while($i != $id) $i++;
            $student[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $student;
    }
    public function getStudentDetail($stid){
        $allStudent = $this->getAllStudent();
        return $allStudent[$stid];
    }

    public function insertStudent($id, $name, $age, $university){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "insert into student values($id,'$name', $age,'$university')" ;
        if (mysqli_query($link, $sql)) {
            header("Location:../Controller/Controller_Student.php");
        } else {
            header("Location:InsertStudent.php");
        }
    }

    public function updateStudent($id, $name, $age, $university){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "update student set name = '$name', age = '$age', university = '$university' where id = '$id'" ;
        (mysqli_query($link, $sql));
    }

    public function deleteStudent($id){
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        $sql = "delete from student where id = '$id'" ;
        (mysqli_query($link, $sql));
    }

    public function searchStudent($check, $data){
        if($data==""){
            header("Location:?mod4");
        }
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MYSQL");
        mysqli_select_db($link, "DULIEUNEW");
        if($check=="ID"){
            $sql = "select * from student where id = '$data'" ;
        }else if($check=="Name"){
            $sql = "select * from student where name = '$data'" ;
        }else if($check=="Age")
            $sql = "select * from student where age = '$data'" ;
        else
            $sql = "select * from student where university = '$data'" ;
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result)==0) {
            header("Location:?mod4");
        }else{
            $i = 0;
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                $student[++$i] = new Entity_Student($id, $name, $age, $university);
            }
            return $student;
        }
    }
}
?>
