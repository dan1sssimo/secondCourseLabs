<?php
session_start();
if ($_GET["lang"]) {
    setcookie("lang", $_GET["lang"], time() + 3600 * 24 * 365 / 2);
    $chosenLanguage = "Вибрана мова: {$_GET["lang"]}";
} elseif ($_COOKIE["lang"]) {
    $chosenLanguage = "Вибрана мова: {$_COOKIE["lang"]}";
}


$login = $_SESSION['login'];
$password1 = $_SESSION['password1'];
$password2 = $_SESSION['password2'];
$gender = $_SESSION['gender'];
$city = $_SESSION["city"];
$games = $_SESSION["games"];
$about_you = $_SESSION["about_you"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img {
        height: 25px;
        width: 35px;
    }

    div {
        padding: 5px;
        margin-left: 100px;
    }
</style>
<body>
<h2>Лабораторна роботора №11</h2>
<h1><?php echo $chosenLanguage; ?></h1>
<div>
    <a href="index.php?lang=usa"><img src="usa.png" alt=""></a>
    <a href="index.php?lang=ukr"><img src="ukr.png" alt=""></a>
    <a href="index.php?lang=can"><img src="can.png" alt=""></a>
</div>


<form action="form.php" method="POST" enctype='multipart/form-data'>
    <label>Логін: <input type="text" name="login" value="<?php echo $login ?>"></label><br>
    <label>Пароль: <input type="password" name="password1" value="<?php echo $password1 ?>"></label><br>
    <label>Пароль (ще раз): <input type="password" name="password2" value="<?php echo $password2 ?>"></label><br>
    <label>Стать:</label>
    <input type="radio" name="gender" value="man"
    <?php if ($gender == 'man') echo "checked=\"checked\""; ?>">Чоловік
    <input type="radio" name="gender" value="woman"
        <?php if ($gender == 'woman') echo "checked=\"checked\""; ?>>Жінка<br>
    <label>Місто: <select name="city">
            <option value="Zhytomyr" <?php if ($city == 'Zhytomyr') echo "selected=\"selected\""; ?>>Житомир</option>
            <option value="Kyev" <?php if ($city == 'Kyev') echo "selected=\"selected\""; ?>>Київ</option>
            <option value="Lviv" <?php if ($city == 'Lviv') echo "selected=\"selected\""; ?>>Львів</option>
        </select> </label><br>
    <label>Улюблені ігри:</label><br>
    <input type="checkbox" name="games[]"
           value="Football" <?php if (in_array("Football", $games)) echo "checked=\"checked\""; ?>>Футбол<br>
    <input type="checkbox" name="games[]"
           value="Golf" <?php if (in_array("Golf", $games)) echo "checked=\"checked\""; ?>>Гольф<br>
    <input type="checkbox" name="games[]"
           value="Gaming" <?php if (in_array("Gaming", $games)) echo "checked=\"checked\""; ?>>Геймінг<br>
    <label>Про себе: <textarea type="text" name="about_you"
                               placeholder="<?php echo $about_you ?>"></textarea></label><br>
    <label>Фотографія: <input type="file" name="image"><br>Image<br>
        <br>
        <input type="submit" value="Зареєструватися"><br>
</form>
</body>
</html>