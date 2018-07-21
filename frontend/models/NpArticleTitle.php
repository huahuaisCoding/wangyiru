<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%np_article_title}}".
 *
 * @property integer $tid
 * @property string $content
 * @property integer $status
 */
class NpArticleTitle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%np_article_title}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid'], 'required'],
            [['tid', 'status'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'content' => 'Content',
            'status' => 'Status',
        ];
    }
}
