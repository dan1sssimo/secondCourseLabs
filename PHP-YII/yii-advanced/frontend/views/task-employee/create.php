<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TaskEmployee */

$this->title = 'Create Task Employee';
$this->params['breadcrumbs'][] = ['label' => 'Task Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'task_id' => $task_id,
        'create' => true
    ]) ?>

</div>
