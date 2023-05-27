<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../Bootstrap/boot.php';
    ?>
    <title>Update Data</title>
</head>
<body>
    

    <div class="container w-25 shadow border my-4 class="my-3"" >
        <div class="row">
            <div class="col-lg-12">

                <?php
                    include '../Connection/connect.php';
                    $id = $_GET['id'];
                    $query = "SELECT * FROM std_info WHERE id = $id";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result)){


                        
                ?>
<form action="./update-data.php" method="POST">

<h2>Update Form Data</h2>

<label class="my-3" for="name">ID</label>
<input type="text" name="id" class="form-control" value="<?php echo $row['id'] ?>"  placeholder="Enter Updated Name">

<label class="my-3" for="name">Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>"  placeholder="Enter Updated Name">

<label class="my-3" for="age">Age</label>
<input type="text" name="age" class = "form-control" value="<?php echo $row['age'] ?>" placeholder="Enter Updated Age Number">

<label class="my-3" for="gender">Gender</label>
<input type="text" name="gender"class = "form-control" value="<?php echo $row['gender'] ?>" placeholder="Enter Updated Gender Name">

<label class="my-3" for="class">class</label>
<input type="text" name="class"class = "form-control" value="<?php echo $row['class'] ?>" placeholder="Enter Updated Class Name">

<input  type="submit" class="btn btn-info my-3 w-100" value="Updated Data">
            </div>

        </div>
    </div>

                            <?php
                        }
                    }
                            ?>

      </form>


</body>
</html>