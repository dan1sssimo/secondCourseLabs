<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TaskEmployee */

$this->title = 'Update Task Employee: ' . $model->task_employee_id;
$this->params['breadcrumbs'][] = ['label' => 'Task Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->task_employee_id, 'url' => ['view', 'id' => $model->task_employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'task_id' => $task_id
    ]) ?>

</div>
