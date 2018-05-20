<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modalidaddepago".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Programamodalidad[] $programamodalidads
 */
class Modalidaddepago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modalidaddepago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramamodalidads()
    {
        return $this->hasMany(Programamodalidad::className(), ['id_modalidad' => 'id']);
    }
}
