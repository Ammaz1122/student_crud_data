<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Main Page</title>

</head>
<body>
    
    <div class="container w-25 border shadow mt-5 ">
        <div class="row ">

            <div class="col-lg-12 ">

                <form action="./insert-data.php" method="POST">

                <h1> Student Form</h1>
            
                <label for=""  class="py-2">Name</label>
                <input  class="form-control my-3" type="text" name="name" placeholder="Enter your name">

                <label  class="py-2"for="">Age</label>
                <input  class="form-control my-3" type="number" name="age" placeholder="Enter your Age">

                <label class="py-2" for="">Gender</label>
                <!-- <input type="text" name="name" placeholder="Enter your name"> -->
                <select class="form-control my-3" name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>


                <label class="py-2" for="class"> Class</label>
                <input class="form-control my-3" type="text" name="class" placeholder="Enter your Class Name">

                <input type="submit" value="Insert Data" class="btn btn-success w-100 my-3">
                </form>
            </div>
        </div>
    </div>



</body>
</html>