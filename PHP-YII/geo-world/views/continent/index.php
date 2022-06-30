<?php

use yii\helpers\HTML;
use yii\helpers\Url;

?>


<div class="container">
    <div class="row" style="display: flex; align-items: stretch!important; align-content: space-between;">
        <?php foreach ($continents as $continent): ?>
            <div class="col-6 col-md-4">
                <a href="<?= URL::to(['continent/view', 'code' => $continent['code']]); ?>"
                   style="text-decoration: none!important;">
                    <h4 class="card-title mb-0"
                        style="background-color: blue; border: 0; color: white; padding: 10px;">
                        <?= Html::encode($continent["name"]) ?>
                    </h4>
                    <div class="card p-2 mb-2">
                        <?= Html::img('@web/images/continents/' . strtolower($continent['code']) . '.png', ['alt' => $continent['name']]) ?>
                        <div class="card-body" style="color: black; background-color: lightgray; height: 20vh">
                            <p class="card-text"><?= Html::encode($continent["description"]) ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>