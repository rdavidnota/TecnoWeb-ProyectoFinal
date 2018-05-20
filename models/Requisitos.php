<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requisitos".
 *
 * @property int $Id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Prograrequisitos[] $prograrequisitos
 */
class Requisitos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requisitos';
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
            'Id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograrequisitos()
    {
        return $this->hasMany(Prograrequisitos::className(), ['id_requisitos' => 'Id']);
    }
}
