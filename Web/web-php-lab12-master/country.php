<?php
include("functions.php");
$connection = connect();
$code = $_GET['code'];
$country = getCountry($connection, $code);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Country</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include("header.php"); ?>
<main>
    <div class="container">
        <div class="col-6 col-md-4">
            <h1> <?= $country['name'] ?></h1>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">Flag</th>
                    <td>
                        <img src="FILES/images/countries/png250px/<?= strtolower($country[0]['code']) ?>.png" alt="qwerty">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td><?= $country[0]['name'] ?></td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">Code</th>
                    <td><?= $country[0]['code'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Official name</th>
                    <td colspan="2"><?= $country[0]['official_name'] ?></td>
                </tr>
                <tr>
                    <th scope="row">ISO 3</th>
                    <td colspan="2"><?= $country[0]['iso3'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Number</th>
                    <td colspan="2"><?= $country[0]['number'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Currency</th>
                    <td colspan="2"><?= $country[0]['currency'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Capital</th>
                    <td colspan="2"><?= $country[0]['capital'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Area</th>
                    <td colspan="2"><?= $country[0]['area'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Continent code</th>
                    <td colspan="2"><?= $country[0]['continent_code'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Coords</th>
                    <td colspan="2"><?= $country[0]['coords'] ?></td>
                </tr>
                </tbody>
            </table>
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