<?php

namespace app\controllers;

use app\models\Continent;
use app\models\Country;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ContinentController extends Controller
{
    public function actionIndex()
    {
        $continents = Continent::find()->asArray()->all();
        return $this->render("index", ["continents" => $continents]);
    }

    public function actionView($code = "AF")
    {
        $continent = Continent::find()->where(['code' => $code])->one();
        $countriesDataProvider = new ActiveDataProvider([
            'query' => Country::find()->where(['continent_id' => $continent['continent_id']]),
            'pagination' => [
                'pageSize' => 20
            ]
        ]);

        return $this->render("view", compact('continent', 'countriesDataProvider'));
    }

    public function actionEdit($id = "AF")
    {
        $request = Yii::$app->request;
        $code = Country::find()->where(['country_id' => $id])->one()["code"];
        if ($request->isGet) {
            $country = Country::find()->where(['country_id' => $id])->one();
            $continents = Continent::find()->asArray()->all();
            return $this->render("edit", compact('country', 'continents'));
        }
        if ($request->isPost) {
            $post = $request->post()["Country"];
            $content_id = $request->post()["continent_id"];
            Yii::$app->db->createCommand("UPDATE Country SET name=:name, official_name=:official_name, currency=:currency,
                   area=:area,capital=:capital, continent_id=:continent_id WHERE country_id=:id")
                ->bindValue(':id', $id)
                ->bindValue(':name', $post["name"])
                ->bindValue(':official_name', $post["official_name"])
                ->bindValue(':currency', $post["currency"])
                ->bindValue(':area', $post["area"])
                ->bindValue(':capital', $post["capital"])
                ->bindValue(':continent_id', $content_id)
                ->execute();
            return $this->redirect(['country/' . $code]);
        }
    }

    public function actionCountry($code = "AF")
    {
        $country = Country::find()->where(['code' => $code])->one();
        $continent=Continent::find()->where(['continent_id'=>$country['continent_id']])->one();

        return $this->render("country", compact('country','continent'));
    }

}