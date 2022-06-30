<?php


namespace common\rbac;


use yii\rbac\Item;
use yii\rbac\Rule;

class OwnProjectRule extends Rule
{
    public $name = 'OwnProjectRule';
    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
        if (!isset($params['project'])) {
            return false;
        }

        $project = $params['project'];
        if($project->user_id == $user) {
            return true;
        }

        return false;
        // TODO: Implement execute() method.
    }
}