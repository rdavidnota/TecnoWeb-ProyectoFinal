<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detallemodulo".
 *
 * @property int $id_detallemodulo
 * @property int $id_detalleprogramamodulo
 * @property int $id
 *
 * @property Detalleprograma $detalleprogramamodulo
 * @property Modulo $detallemodulo
 */
class Detallemodulo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detallemodulo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detallemodulo', 'id_detalleprogramamodulo'], 'integer'],
            [['id_detalleprogramamodulo'], 'exist', 'skipOnError' => true, 'targetClass' => Detalleprograma::className(), 'targetAttribute' => ['id_detalleprogramamodulo' => 'id']],
            [['id_detallemodulo'], 'exist', 'skipOnError' => true, 'targetClass' => Modulo::className(), 'targetAttribute' => ['id_detallemodulo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detallemodulo' => 'Id Detalle Modulo',
            'id_detalleprogramamodulo' => 'Id Detalleprogramamodulo',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleprogramamodulo()
    {
        return $this->hasOne(Detalleprograma::className(), ['id' => 'id_detalleprogramamodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallemodulo()
    {
        return $this->hasOne(Modulo::className(), ['id' => 'id_detallemodulo']);
    }
}
