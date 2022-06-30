<?php

use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'task_id',
            'title',
            'start',
            'finish',
            'deadline',
            //'status_id',
            //'project_id',

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
        ],
    ]); ?>


</div>
