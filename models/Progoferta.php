<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "progoferta".
 *
 * @property int $id_programa
 * @property int $id_oferta
 * @property int $id
 *
 * @property Oferta $oferta
 * @property Programa $programa
 */
class Progoferta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'progoferta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_programa', 'id_oferta'], 'integer'],
            [['id_oferta'], 'exist', 'skipOnError' => true, 'targetClass' => Oferta::className(), 'targetAttribute' => ['id_oferta' => 'id']],
            [['id_programa'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_programa' => 'Id Programa',
            'id_oferta' => 'Id Oferta',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOferta()
    {
        return $this->hasOne(Oferta::className(), ['id' => 'id_oferta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['id' => 'id_programa']);
    }
}
