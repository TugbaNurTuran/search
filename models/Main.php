<?php

namespace kouosl\search\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $keywordID
 * @property string $keyword
 *
 * @property Subject $subject
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keywordID' => 'Keyword ID',
            'keyword' => 'Keyword',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['keywordID' => 'keywordID']);
    }
}
