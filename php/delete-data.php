<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data </title>
</head>
<body>
    
        <?php
        include '../Connection/connect.php';
        $id = $_GET['id'];

        $query = "DELETE FROM std_info WHERE id = $id";
        $result = mysqli_query($conn,$query);

        if($result){
            echo "Data Deleted";
        }
        else{
            echo "Data Not deleted";    
        }

            header("Location: http://localhost/student-management/php/show-data.php");

        ?>



</body>
</html>