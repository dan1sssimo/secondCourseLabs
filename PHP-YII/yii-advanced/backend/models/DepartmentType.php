<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "department_type".
 *
 * @property int $type_id
 * @property string $name
 *
 * @property Department[] $departments
 */
class DepartmentType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['type_id' => 'type_id']);
    }
}
