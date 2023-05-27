<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include '../Bootstrap/boot.php';
    ?>

    <title>Show Data</title>
</head>
<body>

    <table class="table text-capitalize fs-4 w-75 text-center mt-4 m-auto">
        <thead>
            <tbody>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>class</th>
                <th>Update</th>
                <th>Delete</th>


                <?php
                include '../Connection/connect.php';
                $view = "SELECT * FROM std_info";
                $result = mysqli_query($conn,$view);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['class'] ?></td>
                        <td><a href="http://localhost/student-management/php/update.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Update </a></td>
                        <td><a href="http://localhost/student-management/php/delete-data.php?id=<?php echo $row['id']?>" class="btn btn-danger"> Delete</a></td>
                    </tr>

            <?php 
                    }
                } else if(mysqli_num_rows($result) == 0){
                    echo "<h1> No Record Found</h1>";
                }
                ?>


            </tbody>
        </thead>
    </table>



</body>
</html>