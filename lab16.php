<!DOCTYPE html>
<html>
<body>

<h2>Age Validation Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>

    Age: <input type="number" name="age"><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $age = $_POST["age"];

    echo "Name: " . $name . "<br>";

    // Check if age is empty
    if($age === "") {
        echo "Age is required<br>";
    }
    // Check if numeric and valid range
    else if(!is_numeric($age)) {
        echo "Age must be a number<br>";
    }
    else if($age < 1 || $age > 120) {
        echo "Age must be between 1 and 120<br>";
    }
    else {
        echo "Age: " . $age . "<br>";
    }
}
?>

</body>
</html>