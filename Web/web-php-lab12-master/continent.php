<?php
include("functions.php");
$connection = connect();
$code = $_GET['code'];
$continent = getContinent($connection, $code);
$countries = getCountriesByContinent($connection, $code);
//print_r($continent);
//print_r($countries);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Continent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include("header.php"); ?>
<main>
    <div class="container">

        <div class="list-group">
            <div class="list-group-item list-group-item-secondary">Country List</div>
            <?php foreach ($countries as $countryItem): ?>
                <a href="country.php?code=<?= $countryItem['code'] ?>" class="list-group-item list-group-item-action">
                    <img src="FILES/images/countries/png100px/<?= strtolower($countryItem['code']) ?>.png">
                    <?= $countryItem['name'] ?>;
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include("footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
