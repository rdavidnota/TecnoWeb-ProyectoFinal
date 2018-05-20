<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titulacion".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Programatitulacion[] $programatitulacions
 */
class Titulacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'titulacion';
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
    public function getProgramaTitulaciones()
    {
        return $this->hasMany(Programatitulacion::className(), ['id_titulacion' => 'id']);
    }
}
