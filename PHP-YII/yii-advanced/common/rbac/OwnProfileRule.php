<?php

namespace common\rbac;

use yii\rbac\Rule;

class OwnProfileRule extends Rule
{
    public $name = 'OwnProfileRule';

    public function execute($user, $item, $params)
    {
        return isset($params['employee']) ? $params['employee']->user_id == $user : false;
    }
}