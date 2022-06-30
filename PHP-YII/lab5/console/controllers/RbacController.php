<?php

namespace console\controllers;

use common\rbac\OwnDepartmentRule;
use common\rbac\OwnProfileRule;
use common\rbac\OwnProjectRule;
use common\rbac\OwnProjectTaskRule;
use common\rbac\OwnTaskRule;
use common\rbac\ProjectWithOwnTaskRule;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $employee = $auth->createRole('Employee');
        $manager = $auth->createRole('Manager');
        $admin = $auth->createRole('Admin');

        $auth->add($employee);
        $auth->add($manager);
        $auth->add($admin);

        $auth->addChild($manager, $employee);
        $auth->addChild($admin, $manager);

        $auth->assign($admin, 1);
        $auth->assign($manager, 2);
        $auth->assign($employee, 3);
        $auth->assign($employee, 4);
    }

    public function actionUpdateProfilePermission()
    {
        $auth = Yii::$app->authManager;
        $employeeUpdate = $auth->createPermission('employeeUpdate');
        $employeeUpdateOwnProfile = $auth->createPermission('employeeUpdateOwnProfile');
        $employeeUpdateOwnDepartment = $auth->createPermission('employeeUpdateOwnDepartment');

        $employee = $auth->getRole('Employee');
        $admin = $auth->getRole('Admin');
        $manager = $auth->getRole('Manager');

        $auth->add($employeeUpdate);
        $auth->add($employeeUpdateOwnProfile);
        $auth->add($employeeUpdateOwnDepartment);

        $auth->addChild($employeeUpdateOwnProfile, $employeeUpdate);
        $auth->addChild($employeeUpdateOwnDepartment, $employeeUpdate);
        $auth->addChild($employee, $employeeUpdateOwnProfile);
        $auth->addChild($admin, $employeeUpdate);
        $auth->addChild($manager, $employeeUpdateOwnDepartment);
    }

    public function actionUpdateOwnProfileRule()
    {
        $auth = Yii::$app->authManager;
        $employeeUpdateOwnProfile = $auth->getPermission('employeeUpdateOwnProfile');
        $rule = new OwnProfileRule();
        $auth->add($rule);
        $employeeUpdateOwnProfile->ruleName = $rule->name;
        $auth->update(null, $employeeUpdateOwnProfile);
    }

    public function actionUpdateOwnDepartmentRule()
    {
        $auth = Yii::$app->authManager;
        $employeeUpdateOwnDepartment = $auth->getPermission('employeeUpdateOwnDepartment');
        $rule = new OwnDepartmentRule();
        $auth->add($rule);
        $employeeUpdateOwnDepartment->ruleName = $rule->name;
        $auth->update(null, $employeeUpdateOwnDepartment);
    }
    public function actionProjectPermissions() {
        $auth = Yii::$app->authManager;


        $employeeProjectPermission = $auth->createPermission('employeeProjectPermission');
        $auth->add($employeeProjectPermission);


        $employeeOwnProjectPermission = $auth->createPermission('employeeOwnProjectPermission');
        $ruleOwnProject = new OwnProjectRule();
        $auth->add($ruleOwnProject); // Rule
        $employeeOwnProjectPermission->ruleName = $ruleOwnProject->name;
        $auth->add($employeeOwnProjectPermission);


        $employeeProjectWithOwnTaskPermission = $auth->createPermission('employeeProjectWithOwnTaskPermission');
        $ruleProjectWithOwnTask = new ProjectWithOwnTaskRule();
        $auth->add($ruleProjectWithOwnTask); // Rule
        $employeeProjectWithOwnTaskPermission->ruleName = $ruleProjectWithOwnTask->name;
        $auth->add($employeeProjectWithOwnTaskPermission);


        $auth->addChild($employeeOwnProjectPermission, $employeeProjectPermission);
        $auth->addChild($employeeProjectWithOwnTaskPermission, $employeeProjectPermission);


        $employee = $auth->getRole('Employee');
        $manager = $auth->getRole('Manager');
        $admin = $auth->getRole('Admin');


        $auth->addChild($employee, $employeeProjectWithOwnTaskPermission);
        $auth->addChild($manager, $employeeOwnProjectPermission);
        $auth->addChild($admin, $employeeProjectPermission);
    }

    public function actionTasksPermissions() {
        $auth = Yii::$app->authManager;


        $employeeTaskPermission = $auth->createPermission('employeeTaskPermission');
        $auth->add($employeeTaskPermission); // Perm


        $employeeProjectsTaskPermission = $auth->createPermission('employeeProjectsTaskPermission');
        $ruleOwnProjectTask = new OwnProjectTaskRule();
        $auth->add($ruleOwnProjectTask); // Rule
        $employeeProjectsTaskPermission->ruleName = $ruleOwnProjectTask->name;
        $auth->add($employeeProjectsTaskPermission); // Perm


        $employeeOwnTaskPermission = $auth->createPermission('employeeOwnTaskPermission');
        $ruleOwnTask = new OwnTaskRule();
        $auth->add($ruleOwnTask); // Rule
        $employeeOwnTaskPermission->ruleName = $ruleOwnTask->name;
        $auth->add($employeeOwnTaskPermission); // Perm


        $auth->addChild($employeeProjectsTaskPermission, $employeeTaskPermission);
        $auth->addChild($employeeOwnTaskPermission, $employeeTaskPermission);


        $employee = $auth->getRole('Employee');
        $manager = $auth->getRole('Manager');
        $admin = $auth->getRole('Admin');


        $auth->addChild($employee, $employeeOwnTaskPermission);
        $auth->addChild($manager, $employeeProjectsTaskPermission);
        $auth->addChild($admin, $employeeTaskPermission);
    }
}