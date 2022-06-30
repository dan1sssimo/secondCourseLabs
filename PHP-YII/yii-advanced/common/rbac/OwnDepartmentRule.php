<?php


namespace common\rbac;


use backend\models\Employee;
use Yii;
use yii\rbac\Rule;

class OwnDepartmentRule extends Rule
{
    public $name = 'OwnDepartmentRule';

    public function execute($user, $item, $params)
    {
        $employee = Employee::findOne(['user_id' => $user]);

        return isset($params['employee']) ? $params['employee']->department_id == $employee->department_id : false;
    }
}