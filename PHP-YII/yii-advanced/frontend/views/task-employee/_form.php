<?php

use frontend\models\Employee;
use frontend\models\Task;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TaskEmployee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task_id')->textInput() ?>

    <?
    $array = Employee::find();
    foreach (Task::findOne(['task_id' => $task_id])->taskEmployees as $employee) {
        $array->andWhere(['!=', 'user_id', $employee->user_id]);
    }
    $array = $array->all();
    ?>
    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map($array,
            'user_id', function (Employee $model) {
                return $model->first_name.' '.$model->last_name;
            }),
        ['prompt' => 'Choose Employee']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
