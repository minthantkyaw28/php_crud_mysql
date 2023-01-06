<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Create</title>

    <!-- Bootstrap CSS LINKING -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

    <div class="container">

       
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">

                    <div class="card-header">
                         <div class="row">
                            <div class="col-md-6">
                                <div class="card-title">PHP+MYSQL CRUD APP - Create Page</div>
                            </div>
                            <div class="col-md-6">
                                <a href="./index.php" class="btn btn-primary float-end"><< Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            
                        <div class="form-group mt-2">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                        </div>

                         <div class="form-group mt-2">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Enter Post Description"></textarea>
                        </div>

                        <div class="form-group mt-2">
                            <button class="btn btn-primary float-end" name="Create_post_btn" type="submit">Create</button>
                        </div>

                        </form>

                    </div>

                
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS LINKING -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- PHP Start -->
    <?php

        //Calling global db connection file 
        require('./db_connect.php');

        if(isset($_POST['Create_post_btn'])){
            
            //Data from form input
            $title=$_POST['title'];
            $description=addslashes($_POST['description']);
            //Solving the Apostrophe inserting issue by using addslashes() method


            //SQL query for data insertion
            $insert_query = "INSERT INTO posts (title,description) VALUES ('$title','$description')";

            //db connection as 1st parameter and insert query as 2nd
            mysqli_query($db_connecton,$insert_query);
        }
    ?>
    <!-- PHP End -->
</body>
</html>