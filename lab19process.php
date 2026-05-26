<!DOCTYPE html>
<html>
<body>

<h2>Form Output</h2>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = $_POST["age"];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";

    if(isset($_POST["gender"])) {
        echo "Gender: " . $_POST["gender"];
    } else {
        echo "Gender not selected";
    }
}
?>

</body>
</html>