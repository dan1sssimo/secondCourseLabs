<?php


namespace common\rbac;


use yii\rbac\Item;
use yii\rbac\Rule;

class OwnTaskRule extends Rule
{
    public $name = 'OwnTaskRule';
    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
        if (!isset($params['task'])) {
            return false;
        }

        $task = $params['task'];
        foreach ($task->taskEmployees as $taskEmployee) {
            $task_user = $taskEmployee->user;
            if ($task_user->id == $user) {
                return true;
            }
        }

        return false;
        // TODO: Implement execute() method.
    }
}