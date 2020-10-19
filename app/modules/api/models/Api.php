<?php

namespace app\modules\api\models;

use Yii;


/**
 * This is the model class for table "api".
 *
 * @property int|null $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 */
class Api extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'lastname', 'email'], 'required'],
            [['name', 'lastname', 'email'], 'string', 'max' => 150],
        ];
    }
    public function scenarios()
 {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['name','lastname','email']; 
        return $scenarios; 
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'email' => 'Email',
        ];
    }
}
