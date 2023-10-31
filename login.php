<?php
session_start();

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

$errorMessage = "";

$fp = fopen("data/users.txt", "r");

$roles = array();
$emails = array();
$firstname = array();
$lastname = array();
$age = array();
$passwords = array();

while ($line = fgets($fp)) {
    $values = explode(",", $line);

    if (count($values) >= 6) {
        array_push($roles, trim($values[0]));
        array_push($emails, trim($values[1]));
        array_push($passwords, trim($values[2]));
        array_push($firstname, trim($values[3]));
        array_push($lastname, trim($values[4]));
        array_push($age, trim($values[5]));
    }
    
}

fclose($fp);

for ($i = 0; $i < count($roles); $i++) {

    if ($email == $emails[$i]  && $password == $passwords[$i]) {
        $_SESSION['role'] = $roles[$i];
        $_SESSION['email'] = $emails[$i];
        $_SESSION['firstname'] = $firstname[$i];
        $_SESSION['lastname'] = $lastname[$i];
        $_SESSION['age'] = $age[$i];

        header("Location: function.php");

    } else {
        $errorMessage = "Wrong email or password";
    }
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
                <h1 class="text-primary">Please LogIn</h1>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <p class="text-warning">
                        <?php echo $errorMessage;  ?>
                    </p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p>Don't have an account? <a href="registration.php">SignUp</a></p>
                </form>
            </div>
        </row>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>