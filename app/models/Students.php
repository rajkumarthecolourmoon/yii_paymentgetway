<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $class
 * @property string $orientation
 * @property string $dob
 * @property string $academic_year
 * @property int $student_id
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'class', 'orientation', 'dob', 'academic_year', 'student_id'], 'required'],
            [['class', 'orientation', 'academic_year'], 'string'],
            [['dob'], 'safe'],
            [['student_id'], 'integer'],
            [['name'], 'string', 'max' => 150],
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
            'class' => 'Class',
            'orientation' => 'Orientation',
            'dob' => 'Dob',
            'academic_year' => 'Academic Year',
            'student_id' => 'Student ID',
        ];
    }
}
