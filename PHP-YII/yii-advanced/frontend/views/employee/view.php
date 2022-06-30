<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */
$this->title = 'Профіль працівника';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Профіль працівника ' . $model->first_name . ' ' . $model->last_name;
\yii\web\YiiAsset::register($this);
?>
<div class="employee-view">

    <h1 class="text-center"><?= Html::encode('Профіль працівника ' . $model->first_name . ' ' . $model->last_name) ?></h1>
    <div class="container-fluid h-100 ">
        <div class="row align-items-center h-100">
            <div class="col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-8 text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <?= DetailView::widget([
                                    'model' => $model,
                                    'attributes' => [
                                        'first_name',
                                        'last_name',
                                        'email:email',
                                        'department.department_name',
                                    ],
                                ]) ?>
                                <p>
                                    <?= Html::a('Редагувати профіль', ['update', 'id' => $model->employee_id], ['class' => 'btn btn-primary']) ?>
                                    <?php
                                    if (array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] == 'Admin') {
                                        echo Html::a('Видалити профіль', ['delete', 'id' => $model->employee_id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => 'Ви впевнені, що хочете видалити даного працівника?',
                                                'method' => 'post',
                                            ],
                                        ]);
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

