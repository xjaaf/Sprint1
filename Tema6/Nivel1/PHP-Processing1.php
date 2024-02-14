<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProcessingPHP</title>
</head>
<body>
<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$id = $_POST["id"];
$age = $_POST["age"];

echo "<p>Name: " . $name . "</p>";
echo "<p>Email: " . $email . "</p>";
echo "<p>ID: " . $id . "</p>";
echo "<p>Age: " . $age . "</p>";

?>
</body>
</html>