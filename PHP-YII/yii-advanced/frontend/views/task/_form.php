<?php

use frontend\models\AuthAssignment;
use frontend\models\Status;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Task */
/* @var $form yii\widgets\ActiveForm */
$url = mb_substr(Yii::$app->request->url, 0, strpos(Yii::$app->request->url, '?'));

?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start')->widget(
        DatePicker::className(),
        [
            'options' => [
                'disabled' => true,
                'value' => $url == '/task/create' ? date('Y/m/d') : $model->start,
            ],
            'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'yyyy/MM/dd',
                'clearBtn' => false
            ]
        ]
    ) ?>

    <? if ($url != '/task/create') {
        echo $form->field($model, 'finish')->widget(
            DatePicker::className(),
            [
                'options' => [
                    'placeholder' => 'Select finish date',
                ],
                'convertFormat' => true,
                'pluginOptions' => [
                    'format' => 'yyyy/MM/dd',
                    'todayHighlight' => true,
                    'startDate' => date('Y/m/d'),
                ]
            ]
        );
    } ?>

    <?= $form->field($model, 'deadline')->widget(
        DatePicker::className(),
        [
            'options' => [
                'placeholder' => 'Select deadline date',
            ],
            'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'yyyy/MM/dd',
                'todayHighlight' => true,
                'startDate' => date('Y/m/d', strtotime('+1 month'))
            ]
        ]
    ) ?>
    <?php if (array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == 'Employee' && $model->status_id == 1) {
        echo $form->field($model, 'status_id')->dropDownList(
            ArrayHelper::map(Status::find()->where(['status_id' => [1, 2, 3]])->all(),
                'status_id', 'name'),
            $url == '/task/create' ?
                ['prompt' => 'Select status'] :
                []
        );
    } else if (array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == 'Employee' && $model->status_id == 2) {
        echo $form->field($model, 'status_id')->dropDownList(
            ArrayHelper::map(Status::find()->where(['status_id' => [2, 3]])->all(),
                'status_id', 'name'),
            $url == '/task/create' ?
                ['prompt' => 'Select status'] :
                []
        );
    } else echo $form->field($model, 'status_id')->dropDownList(
        ArrayHelper::map(Status::find()->all(),
            'status_id', 'name'),
        $url == '/task/create' ?
            ['prompt' => 'Select status'] :
            []
    );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>