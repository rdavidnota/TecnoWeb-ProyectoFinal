<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Programa;

/**
 * ProgramasBusqueda represents the model behind the search form of `app\models\Programa`.
 */
class ProgramasBusqueda extends Programa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dirigidoA', 'objetivoGral', 'perfilProfesional', 'metodologia'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Programa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'dirigidoA', $this->dirigidoA])
            ->andFilterWhere(['like', 'objetivoGral', $this->objetivoGral])
            ->andFilterWhere(['like', 'perfilProfesional', $this->perfilProfesional])
            ->andFilterWhere(['like', 'metodologia', $this->metodologia]);

        return $dataProvider;
    }
}
