<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property string $fechaini
 * @property string $horario
 * @property string $docente
 * @property int $id
 *
 * @property Progoferta[] $progofertas
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaini'], 'safe'],
            [['horario', 'docente'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fechaini' => 'Fechaini',
            'horario' => 'Horario',
            'docente' => 'Docente',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgofertas()
    {
        return $this->hasMany(Programa::className(), ['id_progmr' => 'id']);
    }
}
