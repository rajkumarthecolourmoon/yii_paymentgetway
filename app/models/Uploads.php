<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uploads".
 *
 * @property int $id
 * @property string $name
 * @property string $subject
 * @property string $class
 */
class Uploads extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uploads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'subject', 'class'], 'required'],
            [['name', 'subject', 'class'], 'string', 'max' => 225],
            [
                'name', 'unique',
                'targetClass' => 'models\uploads',         
                'message' => 'This name  has already been taken.'
            ]
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
    public function unique(){

       $id = strip_tags(trim($this->id));
       $name = strip_tags(trim($this->name));
        $subject = strip_tags(trim($this->subject));
        $class = strip_tags(trim($this->class));
        
                $query = "SELECT name,subject,class FROM uploads";
        $res_arr = Yii::$app->db->createCommand($query)->queryColumn();
         //echo '<pre/>'; print_R($query); die();
        if (in_array(strtolower($name),  array_map('strtolower', $res_arr))) {
                $this->addError('name', 'Already Exist');
                $this->addError('subject', 'Already Exist');
                $this->addError('class', 'Already Exist');
                
                
            return false;
        } else {
            return true;
        }
    }
}
