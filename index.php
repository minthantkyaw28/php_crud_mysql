<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Main</title>

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
                                <div class="card-title">PHP+MYSQL CRUD APP</div>
                            </div>
                            <div class="col-md-6">
                                <a href="./post_create.php" class="btn btn-primary float-end">+ Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                            <table class="table table-hover table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>HTML</td>
                                        <td>3ff3fvvvvv</td>
                                        <td>
                                            <a href="">Edit</a> |
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS LINKING -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>