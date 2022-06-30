<?php


namespace common\rbac;


use yii\rbac\Item;

class ProjectWithOwnTaskRule extends \yii\rbac\Rule
{
    public $name = 'ProjectWithOwnTaskRule';
    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
        if(!isset($params['project'])) {
            return false;
        }

        $project = $params['project'];
        foreach ($project->tasks as $task) {
            foreach ($task->taskEmployees as $taskEmployee) {
                $task_user = $taskEmployee->user;
                if ($task_user->id == $user) {
                    return true;
                }
            }
        }

        return false;
        // TODO: Implement execute() method.
    }
}