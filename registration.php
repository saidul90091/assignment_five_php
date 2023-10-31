<?php 
$firstname = $_POST["firstname"] ?? "";
$lastname = $_POST["lastname"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$password = $_POST["password"] ?? "";

$role = "user";
$errorMessage = "";

if($email != "" && $password != ""){
    $fp = fopen("data/users.txt", "a");
    fwrite($fp,"\n {$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");
    fclose($fp);
    header("Location:login.php");
}else{
    $errorMessage = "Please enter your email and password";
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <row>
            <div class="col-5 mx-auto mt-5 shadow p-5">
            <h1 class="text-primary">Please Registretion</h1>
                <form action="registration.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <p class="text-warning">
                        <?php echo $errorMessage;  ?>
                    </p>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <p>Already have an account? <a href="login.php">LogIn</a></p>
                </form>
            </div>
        </row>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>