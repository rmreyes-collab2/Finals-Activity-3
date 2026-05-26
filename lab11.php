<!DOCTYPE html>
<html>
<body>

<h2>Student Information Form (Self-Processing)</h2>

<!-- 
    action="" tells where the form will be submitted.
    $_SERVER["PHP_SELF"] gets the current page filename.
    htmlspecialchars() makes it safe by preventing XSS attacks.
-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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

    Message:<br>
    <textarea name="message" rows="5" cols="30"></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Convert special characters to prevent XSS
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $errors = [];

    // Check if fields are empty
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required";
    }

    if (empty($_POST["course"])) {
        $errors[] = "Course is required";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // Display errors or submitted data
    if (!empty($errors)) {
        echo "<h3>Errors:</h3>";
        foreach ($errors as $error) {
            echo "• " . $error . "<br>";
        }
    } else {
        echo "<h3>Submitted Information:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Gender: " . $_POST["gender"] . "<br>";
        echo "Course: " . $_POST["course"] . "<br>";
        echo "Message: " . nl2br($message) . "<br>";
    }
}
?>

</body>
</html>