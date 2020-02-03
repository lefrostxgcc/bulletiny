<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $bull_id
 * @property string|null $link
 * @property string|null $info
 */
class PhotoRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bull_id'], 'required'],
            [['bull_id'], 'integer'],
            [['link', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bull_id' => 'Bull ID',
            'link' => 'Link',
            'info' => 'Info',
        ];
    }

    public function deleteFile()
    {
        $file_ = $this->link;
        unlink($file_);
    }
}
