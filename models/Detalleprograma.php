<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalleprograma".
 *
 * @property int $id
 * @property string $secuencia
 * @property int $id_programadetalle
 *
 * @property Detallemodulo[] $detallemodulos
 * @property Programa $programadetalle
 */
class Detalleprograma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalleprograma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_programadetalle'], 'integer'],
            [['secuencia'], 'string', 'max' => 1],
            [['id_programadetalle'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programadetalle' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'secuencia' => 'Secuencia',
            'id_programadetalle' => 'Id Programadetalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallemodulos()
    {
        return $this->hasMany(Detallemodulo::className(), ['id_detalleprogramamodulo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramadetalle()
    {
        return $this->hasOne(Programa::className(), ['id' => 'id_programadetalle']);
    }
}
