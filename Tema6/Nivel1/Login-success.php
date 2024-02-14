<?php
session_start();

if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
    $name = $_SESSION["username"];
    $email = $_SESSION["email"];
} else {
    header("Location: Form2.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login successful</title>
</head>

<body>
    <h3>Welcome <?php echo $name; ?></h3>
</body>

</html>