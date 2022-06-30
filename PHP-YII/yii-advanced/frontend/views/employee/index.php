<?php

use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employee_id',
            'first_name',
            'last_name',
            'email:email',
            'user_id',
            //'department_id',
            //'image',

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'template' => '{view} {update} {delete}',
                'buttons' => [

                    'view' => function ($url, $model) {
                        return Html::a(FAS::icon('eye'), $url, [
                            'title' => Yii::t('app', 'View')
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a(FAS::icon('edit'), $url, [
                            'title' => Yii::t('app', 'Update')
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a(FAS::icon('trash'), $url, [
                            'title' => Yii::t('app', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post'
                        ]);
                    },
                ]
            ]
        ]
    ]); ?>


</div>
