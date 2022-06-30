<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */

$this->title = 'Редагувати профіль: ' . $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Профіль працівника ' . $model->first_name . ' ' . $model->last_name, 'url' => ['view', 'id' => $model->employee_id]];
$this->params['breadcrumbs'][] = 'Редагувати профіль';
?>
<div class="employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
