<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $date_of_birth
 * @property string|null $position
 * @property int|null $salary
 */
class Employee extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_birth', 'position', 'salary'], 'default', 'value' => null],
            [['name', 'email'], 'required'],
            [['email'], 'string'],
            [['date_of_birth'], 'safe'],
            [['salary'], 'integer'],
            [['name', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'date_of_birth' => 'Date Of Birth',
            'position' => 'Position',
            'salary' => 'Salary',
        ];
    }

}
