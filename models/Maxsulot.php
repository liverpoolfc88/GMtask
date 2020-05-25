<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%maxsulot}}".
 *
 * @property integer $id
 * @property string $maxsulot_name
 * @property string $maxsulot_photo
 * @property string $maxsulot_short
 * @property string $maxsulot_add
 * @property string $maxsulot_update
 * @property integer $user_id
 */
class Maxsulot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%maxsulot}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maxsulot_name', 'maxsulot_short'], 'required'],
            [['user_id'], 'integer'],
            ['maxsulot_photo','file'],
            [['maxsulot_name'], 'string', 'max' => 128],
            [['maxsulot_photo'], 'string', 'max' => 2048],
            [['maxsulot_short', 'maxsulot_add', 'maxsulot_update'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'maxsulot_name' => 'Maxsulot Name',
            'maxsulot_photo' => 'Maxsulot Photo',
            'maxsulot_short' => 'Maxsulot Short',
            'maxsulot_add' => 'Maxsulot Add',
            'maxsulot_update' => 'Maxsulot Update',
            'user_id' => 'User ID',
        ];
    }
}
