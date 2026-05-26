<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>

    Email: <input type="text" name="email"><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br><br>

    Course:
    <select name="course">
        <option value="">--Select Course--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSEd">BSEd</option>
        <option value="BSBA">BSBA</option>
    </select><br><br>

    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

    if(isset($_POST["gender"])) {
        echo "Gender: " . $_POST["gender"] . "<br>";
    } else {
        echo "Gender is not selected<br>";
    }

    if(!empty($_POST["course"])) {
        echo "Course: " . $_POST["course"];
    } else {
        echo "Course is not selected";
    }
}
?>

</body>
</html>