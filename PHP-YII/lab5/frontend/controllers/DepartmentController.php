<?php


namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Department;

class DepartmentController extends Controller
{
    public function actionIndex() {
        $departments = Department::find()
            ->select('ch.*, pa.department_name as `parent_name`, dt.name as `type_name`')
            ->from('department ch')
            ->leftJoin('department pa', 'ch.parent_id = pa.department_id')
            ->leftJoin('department_type dt', 'ch.type_id = dt.type_id')
            ->asArray()
            ->all();
        return $this->render('index', ['departments' => $departments]);
    }

}