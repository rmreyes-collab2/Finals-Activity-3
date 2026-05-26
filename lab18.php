<!DOCTYPE html>
<html>
<body>

<h2>GET vs POST Comparison</h2>

<hr>

<!-- 🔵 GET FORM -->
<h3>GET Method</h3>
<form method="get" action="">
    Name: <input type="text" name="name_get">
    <input type="submit" value="Submit GET">
</form>

<?php
if(isset($_GET['name_get'])) {
    echo "GET Result: " . htmlspecialchars($_GET['name_get']) . "<br>";
    echo "URL shows: ?name_get=...<br><br>";
}
?>

<hr>

<!-- 🟢 POST FORM -->
<h3>POST Method</h3>
<form method="post" action="">
    Name: <input type="text" name="name_post">
    <input type="submit" value="Submit POST">
</form>

<?php
if(isset($_POST['name_post'])) {
    echo "POST Result: " . htmlspecialchars($_POST['name_post']) . "<br>";
    echo "URL does NOT show data<br><br>";
}
?>

</body>
</html>