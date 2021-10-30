<?php 
include_once("../Model/Model_Student.php");
class Ctrl_Student{
    public function invoke(){
        //Insert student
        if(isset($_GET['mod1']))
        {
            include_once("../View/InsertStudent.php");           
            exit;
        }
        if(isset($_GET['insert'])){
            $id = $_REQUEST['id'];  
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $university = $_REQUEST['university'];

            $modelStudent = new Model_Student();
            $modelStudent->insertStudent($id, $name, $age, $university);
            header("Location:Controller_Student.php");
            exit;
        }

        //Update student
        if(isset($_GET['mod2']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/updateList.php");           
            exit;
        }
        if(isset($_GET['idUpdate'])){
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['idUpdate']);
            include_once("../View/updateStudent.php");
            exit;
        }
        if(isset($_GET['update'])){
            $id = $_REQUEST['id'];  
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $university = $_REQUEST['university'];

            $modelStudent = new Model_Student();
            $modelStudent->updateStudent($id, $name, $age, $university);
            header("Location:Controller_Student.php?mod2");
            exit;
        }

        //Delete student
        if(isset($_GET['mod3']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/deleteList.php");           
            exit;
        }
        if(isset($_GET['idDelete'])){
            $modelStudent = new Model_Student();
            $modelStudent->deleteStudent($_GET['idDelete']);
            header("Location:Controller_Student.php?mod3");
            exit;
        }

        //Search student 
        if(isset($_GET['mod4']))
        {
            include_once("../View/searchStudent.php");           
            exit;
        }
        if(isset($_GET['search'])){
            $check = $_REQUEST['check'];
            $data = $_REQUEST['data'];

            $modelStudent = new Model_Student();
            $studentList = $modelStudent->searchStudent($check, $data);
            include_once("../View/searchResult.php");
            exit;
        }

        //View student
        if(isset($_GET['stid'])){
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDetail.php");
        }
        else{
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }
    }
};
$C_Student = new Ctrl_Student();
$C_Student->invoke();
?>
