<?php

use frontend\models\Employee;
use frontend\models\Project;
use frontend\models\Task;
use frontend\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model frontend\models\Task */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->task_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->task_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'task_id',
            'start',
            'finish',
            'deadline',
            [
                'label' => 'Status',
                'value' => $model->status->name,
                'format' => 'raw'
            ],
            [
                'label' => 'Project',
                'value' => function(Task $data) {
                    $project = Project::findOne(['project_id' => $data->project_id]);
                    return Html::a(Html::encode($project->title),
                        Url::to(['/project/view', 'id' => $project->project_id]));
                },
                'format' => 'raw'
            ],
        ],
    ]) ?>
    <div>
        <a href="<?= Url::to(['task-employee/create', 'task_id' => $model->task_id]) ?>" class="btn btn-success">
            Add employee
        </a>
    </div>
    <table class="table">
        <tr>
            <th>Full name</th>
            <th>Username</th>
        </tr>
        <? foreach ($model->taskEmployees as $taskEmployee):
            $user = User::findOne(['id' => $taskEmployee->user_id]);
            $employee = Employee::findOne(['user_id' => $user->id]);
            ?>
            <tr>
                <td>
                    <?= Html::a($employee->first_name.' '.$employee->last_name,
                        Url::to(['employee/view?id' => $employee->employee_id])) ?>
                </td>
                <td><?= $user->username ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</div>
