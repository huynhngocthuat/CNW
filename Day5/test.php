<form action="" method="post">

<input type="radio" name="radio" value="Radio 1">Radio 1

<input type="radio" name="radio" value="Radio 21">Radio 22

<input type="radio" name="radio" value="Radio 3">Radio 3

<input type="submit" name="submit" value="Get Selected Values" />

</form>

<?php

if (isset($_POST['submit'])) {

if(isset($_POST['radio']))
$value = $_REQUEST['radio'];

{

echo "$value";  //  Hiển thị giá trị đã chọn

}
}
?>