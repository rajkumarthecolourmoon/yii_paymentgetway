<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $bookname
 * @property int $price
 * @property string $class
 * @property string $orientation
 * @property string $academic_year
 * @property int $student_id
 * @property int $books_id
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookname', 'price', 'class', 'orientation', 'academic_year', 'student_id', 'books_id'], 'required'],
            [['price', 'student_id', 'books_id'], 'integer'],
            [['class', 'academic_year'], 'string'],
            [['bookname', 'orientation'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bookname' => 'Bookname',
            'price' => 'Price',
            'class' => 'Class',
            'orientation' => 'Orientation',
            'academic_year' => 'Academic Year',
            'student_id' => 'Student ID',
            'books_id' => 'Books ID',
        ];
    }
}
