<?php
include("functions.php");
$connection = connect();
$continents = getContinents($connection);
//print_r($continents);
?>
<!DOCTYPE html>
<html>
<head>
    <title>GeoWorld</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include ("header.php");?>
<main>
    <div class="container">
        <div class="row">
            <?php foreach ($continents as $continentItem): ?>
                <div class="col-6 col-md-4" >
                    <div class="card p-3">
                        <img class="card-img-top"
                             src="FILES/images/continents/<?= strtolower($continentItem['code']) ?>.png" alt="Africa">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="continent.php?code=<?= $continentItem['code'] ?>">
                                    <?= $continentItem['name'] ?>
                                </a>
                            </h4>
                            <p class="card-text"><?= $continentItem['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include ("footer.php");?>
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
