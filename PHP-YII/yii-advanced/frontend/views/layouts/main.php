<?php

/* @var $this \yii\web\View */

/* @var $content string */

use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
$this->title = 'Employee';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "Головна сторінка",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);
    $menuItems = [
        ['label' => 'Головна', 'url' => ['/site/index']],
        ['label' => 'Працівники', 'url' => ['/employee/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Реєстрація', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вхід', 'url' => ['/site/login']];
    } else {
        $dropDownItems[] = ['label' => 'Перейти в профіль', 'url' => ['/employee/my-profile']];
        $dropDownItems[] = "<div class ='dropdown-divider'></div>";
        $dropDownItems[] = [
            'label' => 'Вийти з акаунту (' . Yii::$app->user->identity->username . ')',
            'url' => ['site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];

        $menuItems[] =
            [
                'label' => "Кабінет",
                'items' => $dropDownItems
            ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto align-items-center'],
        'items' => $menuItems,
        'encodeLabels' => false
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
