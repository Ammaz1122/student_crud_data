<?php

include '../Connection/connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$class = $_POST['class'];

$insert = "INSERT INTO std_info (name,age,gender,class) VALUES ('{$name}', '$age', '{$gender}','{$class}')";

$result = mysqli_query($conn,$insert);

// if($result){
//     echo "Query inserted";
// }
// else{
//     echo "Query Failed";
// }


header("Location: http://localhost/student-management/php/show-data.php");

?>