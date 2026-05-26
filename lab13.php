<!DOCTYPE html>
<html>
<body>

<h2>Password Input Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>

    Password: <input type="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $password = $_POST["password"];

    echo "Name: " . $name . "<br>";

    // Do NOT display password directly
    if(!empty($password)) {
        echo "Password: ********<br>";
    } else {
        echo "Password is required<br>";
    }
}
?>

</body>
</html>