<!DOCTYPE html>
<html>
<body>

<h2>Sticky Combined Form</h2>

<?php
// Safely get values (avoid undefined index notices)
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"
        <?php if($gender == "Male") echo "checked"; ?>>
    Male<br>

    <input type="radio" name="gender" value="Female"
        <?php if($gender == "Female") echo "checked"; ?>>
    Female<br><br>

    Course:
    <select name="course">
        <option value="">--Select Course--</option>

        <option value="BSIT" <?php if($course == "BSIT") echo "selected"; ?>>BSIT</option>
        <option value="BSCS" <?php if($course == "BSCS") echo "selected"; ?>>BSCS</option>
        <option value="BSEd" <?php if($course == "BSEd") echo "selected"; ?>>BSEd</option>
        <option value="BSBA" <?php if($course == "BSBA") echo "selected"; ?>>BSBA</option>
    </select>

    <br><br>

    Message:<br>
    <textarea name="message" rows="5" cols="30"><?php echo $message; ?></textarea>

    <br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Submitted Data:</h3>";

    if($name == '') {
        echo "Name: (empty)<br>";
    } else {
        echo "Name: $name<br>";
    }

    if($email == '') {
        echo "Email: (empty)<br>";
    } else {
        echo "Email: $email<br>";
    }

    if($gender != '') {
        echo "Gender: $gender<br>";
    } else {
        echo "Gender: (not selected)<br>";
    }

    if($course != '') {
        echo "Course: $course<br>";
    } else {
        echo "Course: (not selected)<br>";
    }

    if($message == '') {
        echo "Message: (empty)<br>";
    } else {
        echo "Message: " . nl2br($message) . "<br>";
    }
}
?>

</body>
</html>