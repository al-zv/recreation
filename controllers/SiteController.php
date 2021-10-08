<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Aggregators;
use app\models\Checklist;
use yii\data\Pagination;
use app\models\Article;
use app\models\Countries;
use app\models\Country;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

// вывод данных об агрегаторах из БД
    public function actionAggregators()
    {
    // этот запрос возвращает все записи из таблицы, сортирую по столбцу id
    $query = Aggregators::find()
        ->orderBy('id')
        ->all();;
    // отображаем данные в представлении aggregators, передаем данные в представление в виде массива $query
    return $this->render('aggregators', [
        'query' => $query]);
    }

// вывод данных об агрегаторах из БД
    public function actionShow($id = 1)
    {
    // этот запрос возвращает все записи из таблицы, сортирую по столбцу id

    $model = Checklist::findOne($id);

    // отображаем данные в представлении aggregators, передаем данные в представление в виде массива $query
    return $this->render('show', [
        'model' => $model,
    ]);
    }

    public function actionShowAllArticle()
    {

        $query = Article::find();

        $pathImg = 'img/articles/';

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $articles = $query->orderBy('date_created')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('articles', [
            'articles' => $articles,
            'pagination' => $pagination,
            'pathImg' => $pathImg,
        ]);
    }

    public function actionShowArticle($article_id)
    {
        $article = Article::find()->where(['article_id' => $article_id])->one();

        return $this->render('article', [
            'article' => $article,
        ]);
    }
    
    public function actionCountrySelection()
    {
        $country = new Country();
        $countries = Countries::find();

        if ($country->load(Yii::$app->request->post()) && $country->validate()) {
            // данные в $model удачно проверены

            if ($country->ski_resort == 0) {
                $country->country_name = 'Италия';
            } else {
                $country->country_name = 'Греция';
            }

            // делаем что-то полезное с $model ...
 
            return $this->render('countries', [
                'countries' => $countries,
                'country' => $country,
            ]);
        } else {
            return $this->render('countries', [
                'countries' => $countries,
                'country' => $country,
            ]);
        }


        
    }

}