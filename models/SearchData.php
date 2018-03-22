<?php

namespace kouosl\search\models;

use Yii;

/**
 * This is the model class for table "search_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $search_id
 *
 * @property Search $search
 */
class SearchData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'search_id'], 'required'],
            [['search_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['search_id'], 'exist', 'skipOnError' => true, 'targetClass' => Search::className(), 'targetAttribute' => ['search_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'search_id' => 'Search ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSearch()
    {
        return $this->hasOne(Search::className(), ['id' => 'search_id']);
    }
}
