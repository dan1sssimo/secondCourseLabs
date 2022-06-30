<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $department_id
 * @property string $department_name
 * @property int|null $parent_id
 * @property int $type_id
 *
 * @property DepartmentType $type
 * @property Employee[] $employees
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name', 'type_id'], 'required'],
            [['parent_id', 'type_id'], 'integer'],
            [['department_name'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DepartmentType::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'Department Name',
            'parent_id' => 'Parent ID',
            'type_id' => 'Type ID',
        ];
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DepartmentType::className(), ['type_id' => 'type_id']);
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['department_id' => 'department_id']);
    }
}
