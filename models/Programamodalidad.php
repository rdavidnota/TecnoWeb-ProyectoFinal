<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programamodalidad".
 *
 * @property int $id
 * @property int $id_modalidad
 * @property int $id_programa
 *
 * @property Modalidaddepago $modalidad
 * @property Programa $programa
 */
class Programamodalidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programamodalidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_modalidad', 'id_programa'], 'integer'],
            [['id_modalidad'], 'exist', 'skipOnError' => true, 'targetClass' => Modalidaddepago::className(), 'targetAttribute' => ['id_modalidad' => 'id']],
            [['id_programa'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_modalidad' => 'Id Modalidad',
            'id_programa' => 'Id Programa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModalidad()
    {
        return $this->hasOne(Modalidaddepago::className(), ['id' => 'id_modalidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['id' => 'id_programa']);
    }
}
