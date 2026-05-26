<!DOCTYPE html>
<html>
<body>

<h2>Required Attribute Form</h2>

<form method="post" action="">

    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Age:
    <input type="number" name="age" required><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male" required> Male<br>
    <input type="radio" name="gender" value="Female" required> Female<br><br>

    Course:
    <select name="course" required>
        <option value="">--Select Course--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSEd">BSEd</option>
        <option value="BSBA">BSBA</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">

</form>

<hr>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = $_POST["age"];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";

    if(isset($_POST["gender"])) {
        echo "Gender: " . $_POST["gender"] . "<br>";
    }

    if(!empty($_POST["course"])) {
        echo "Course: " . $_POST["course"] . "<br>";
    }
}
?>

</body>
</html>