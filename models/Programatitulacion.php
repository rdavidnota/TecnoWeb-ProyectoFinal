<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "programatitulacion".
 *
 * @property int $id
 * @property int $id_titulacion
 * @property int $id_programa
 *
 * @property Programa $programa
 * @property Titulacion $titulacion
 */
class Programatitulacion extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'programatitulacion';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id_titulacion', 'id_programa'], 'integer'],
            [['id_programa'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programa' => 'id']],
            [['id_titulacion'], 'exist', 'skipOnError' => true, 'targetClass' => Titulacion::className(), 'targetAttribute' => ['id_titulacion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'id_titulacion' => 'Id Titulacion',
            'id_programa' => 'Id Programa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma() {
        return $this->hasOne(Programa::className(), ['id' => 'id_programa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTitulacion() {
        return $this->hasOne(Titulacion::className(), ['id' => 'id_titulacion']);
    }

    public static function getTitulacionesByProgramaId($programaId) {
        $query = Programatitulacion::find()->where(['id_programa' => $programaId]);
        
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 1,
            ]
        ]);

        // returns an array of Post objects
       return $provider;
    }

//       $query = Programatitulacion::find()->where(['id_programa' => $programaId]);
//
//        $provider = new ActiveDataProvider([
//            'query' => $query,
//            'pagination' => [
//                'pageSize' => 20,
//            ],
//            'sort' => [
//                'defaultOrder' => [
//                    'created_at' => SORT_DESC,
//                    'title' => SORT_ASC, 
//                ]
//            ],
//        ]);
//
//        // returns an array of Post objects
//        $posts = $provider->getModels();
}
