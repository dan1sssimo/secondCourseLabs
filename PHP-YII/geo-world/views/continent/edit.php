<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>
    <div class="container">
        <h2><?=$country["name"]?></h2>
        <div class="row">
            <div>
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
                        <td><?= $form->field($country, 'name') ?></td>

                    </tr>
                    <tr>
                        <td>Офіційна назва</td>
                        <td><?= $form->field($country, 'official_name') ?></td>
                    </tr>
                    <tr>
                        <td>Код валюти</td>
                        <td><?= $form->field($country, 'currency') ?></td>
                    </tr>
                    <tr>
                        <td>Площа</td>
                        <td><?= $form->field($country, 'area')->textInput(['type' => 'number']) ?></td>
                    </tr>
                    <tr>
                        <td>Столиця</td>
                        <td><?= $form->field($country, 'capital') ?></td>
                    </tr>

                    <tr>
                        <td>Континент</td>
                        <td>
                            <select class="form-select" size="7" aria-label="size 4 select example" name="continent_id">
                                <?foreach ($continents as $continent):?>
                                    <option value="<?=$continent["continent_id"]?>"><?=$continent["name"]?></option>
                                <?endforeach;?>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary" role="button" data-bs-toggle="button" style="width: 375px">
                    Save</button>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>
