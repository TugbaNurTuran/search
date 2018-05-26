<?php

namespace kouosl\search\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $keywordID
 * @property string $keywordType
 * @property string $wordContent
 *
 * @property Main $keyword
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wordContent'], 'string'],
            [['keywordType'], 'string', 'max' => 200],
            [['keywordID'], 'exist', 'skipOnError' => true, 'targetClass' => Main::className(), 'targetAttribute' => ['keywordID' => 'keywordID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keywordID' => 'Keyword ID',
            'keywordType' => 'Keyword Type',
            'wordContent' => 'Word Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeyword()
    {
        return $this->hasOne(Main::className(), ['keywordID' => 'keywordID']);
    }
}
