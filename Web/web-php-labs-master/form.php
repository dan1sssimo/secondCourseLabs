<?php
session_start();
$_SESSION["login"] = $_POST["login"];
$login = $_POST["login"];

$_SESSION["password1"] = $_POST["password1"];
$password1 = $_POST["password1"];

$_SESSION["password2"] = $_POST["password2"];
$password2 = $_POST["password2"];

$_SESSION["gender"] = $_POST["gender"];
$gender = $_POST["gender"];

$_SESSION["city"] = $_POST["city"];
$city = $_POST["city"];

$_SESSION["games"] = $_POST["games"];
$games = $_POST["games"];

$_SESSION["about_you"] = $_POST["about_you"];
$about_you = $_POST["about_you"];

if ($_FILES['image']['tmp_name']) {
    $imageName = md5(rand(1, 1000) . time());
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$imageName.jpg");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<label>Логін: <?php echo $login ?></label><br>
<label>Пароль: <?php echo $password1 ?></label><br>
<label>Пароль: <?php echo $password2 ?></label><br>
<label>Стать: <?php echo $gender ?></label><br>
<label>Місто: <?php echo $city ?></label><br>
<label>Ігри: <?php foreach($games as $item) echo "$item<br />"; ?></label><br>
<label>Про себе: <?php echo $about_you ?></label><br>
<p>
    <img src="images/<?php echo $imageName ?>.jpg" alt="" style="width: 50%;">
</p>
</body>
</html>