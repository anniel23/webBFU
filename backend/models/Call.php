<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "call".
 *
 * @property int|null $manager_id
 * @property int|null $client_id
 * @property string|null $start_time
 * @property int|null $status
 */
class Call extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'call';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id', 'client_id', 'status'], 'integer'],
            [['start_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'client_id' => 'Client ID',
            'start_time' => 'Start Time',
            'status' => 'Status',
        ];
    }
}
