<?php
session_start();

if(!isset($_SESSION["role"]) || $_SESSION["role"] !== "user"){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container shadow p-5 mt-5">
        <h1>User Details</h1>
        <table class="table table-striped">  
                <tr>
                    <th>Role</th>
                    <th>Email</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Age</th>
                    <th></th>
                    <th></th>

                </tr> 
                <tr>
                    <td><?php echo $_SESSION["role"] ?></td>
                    <td><?php echo $_SESSION["email"] ?></td>
                    <td><?php echo $_SESSION["firstname"] ?></td>
                    <td><?php echo $_SESSION["lastname"] ?></td>
                    <td><?php echo $_SESSION["age"] ?></td>
                    <td><a class="btn btn-warning" href="edit.php">Edit</a></td>
                    <td><a class="btn btn-danger" href="delete.php">Delete</a></td>
                </tr> 
        </table>




        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>