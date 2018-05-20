<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property int $id
 * @property string $dirigidoA
 * @property string $objetivoGral
 * @property string $perfilProfesional
 * @property string $metodologia
 *
 * @property Detalleprograma[] $detalleprogramas
 * @property Progoferta[] $progofertas
 * @property Programamodalidad[] $programamodalidads
 * @property Prograrequisitos[] $prograrequisitos
 * @property Programatitulacion[] $programatitulacions
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['dirigidoA', 'objetivoGral', 'perfilProfesional', 'metodologia'], 'string', 'max' => 150],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dirigidoA' => 'Dirigido A',
            'objetivoGral' => 'Objetivo Gral',
            'perfilProfesional' => 'Perfil Profesional',
            'metodologia' => 'Metodologia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleprogramas()
    {
        return $this->hasMany(Detalleprograma::className(), ['id_programadetalle' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgofertas()
    {
        return $this->hasMany(Progoferta::className(), ['id_programa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramamodalidads()
    {
        return $this->hasMany(Programamodalidad::className(), ['id_programa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograrequisitos()
    {
        return $this->hasMany(Prograrequisitos::className(), ['id_programa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaTitulaciones()
    {
        return $this->hasMany(Programatitulacion::className(), ['id_programa' => 'id']);
    }
}
