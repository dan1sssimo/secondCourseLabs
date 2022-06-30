<?php


namespace common\rbac;


use yii\rbac\Item;
use yii\rbac\Rule;

class OwnProjectTaskRule extends Rule
{
    public $name = 'OwnProjectTaskRule';
    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
        if (!isset($params['task'])) {
            return false;
        }

        $task = $params['task'];
        if ($task->project->user_id == $user) {
            return true;
        }

        return false;
        // TODO: Implement execute() method.
    }
}