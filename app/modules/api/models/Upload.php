<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property int $id
 * @property string $name
 * @property string $subject
 * @property string $class
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'subject', 'class'], 'required'],
            [['name', 'subject', 'class'], 'string', 'max' => 225],
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
            'subject' => 'Subject',
            'class' => 'Class',
        ];
    }
}
