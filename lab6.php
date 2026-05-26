<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Name: " . $name . "<br>";

    // Email validation
    if(empty($email)) {
        echo "Email is required<br>";
    } 
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email<br>";
    } 
    else {
        echo "Email: " . $email . "<br>";
    }
}
?>

</body>
</html>