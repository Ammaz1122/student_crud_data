<?php

include '../Connection/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$age =$_POST['age'];
$gender = $_POST['gender'];
$class = $_POST['class'];

$query = "UPDATE std_info set name='$name',age='$age',gender='$gender',class='$class' WHERE id ='$id'";
$result =mysqli_query($conn,$query);

// if($result)
// {
//     echo"record Updated";
// }
// else{
//         echo "Record not updated";
// }


header("Location: http://localhost/student-management/php/show-data.php"); 

?>