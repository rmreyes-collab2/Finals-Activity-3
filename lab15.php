<!DOCTYPE html>
<html>
<body>

<h2>Form with Reset Button</h2>

<form method="post" action="">

    Name: <input type="text" name="name"><br><br>

    Email: <input type="text" name="email"><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form>

<hr>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

    if(isset($_POST["gender"])) {
        echo "Gender: " . $_POST["gender"] . "<br>";
    } else {
        echo "Gender not selected<br>";
    }
}
?>

</body>
</html>