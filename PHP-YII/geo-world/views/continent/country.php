<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->params['breadcrumbs'][]=['label'=>'Continents', 'url'=>['/']];
$this->params['breadcrumbs'][]=['label'=>$continent['name'], 'url'=>['continent/view', "code" => $continent['code']]];
$this->params['breadcrumbs'][]=['label'=>$country['name'], 'url'=>['country', 'code'=>$country['code']]];
?>

<main>
    <div class="container">
        <h2><?=$country["name"]?></h2>
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Назва поля</th>
                        <th scope="col">Значення</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Назва</td>
                        <td><?=$country["name"]?></td>
                    </tr>
                    <tr>
                        <td>Офіційна назва</td>
                        <td><?=$country["official_name"]?></td>
                    </tr>
                    <tr>
                        <td>Прапор</td>
                        <td> <?= Html::img('@web/images/countries/png250px/' . strtolower($country['code']) . '.png', ['alt' => $country['name']]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Код валюти</td>
                        <td><?=$country["currency"]?></td>
                    </tr>
                    <tr>
                        <td>Площа</td>
                        <td><?=$country["area"]?></td>
                    </tr>
                    <tr>
                        <td>Столиця</td>
                        <td><?=$country["capital"]?></td>
                    </tr>
                    </tbody>
                </table>
                <a href="<?= URL::to(['/country/edit/'. $country['country_id']])?>" class="btn btn-primary" role="button" data-bs-toggle="button">Редагувати</a>
            </div>
            <div class="col-6">
                <div id="map-container-google-1" class="z-depth-1-half map-container">
                    <iframe
                            src="https://www.google.com/maps?q=<?php echo $country["name"];?>&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</main>
