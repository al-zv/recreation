<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>

    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #B3DFF5">
        <div class="container justify-content-center nav nav-pills nav-fill">
            <a class="navbar-brand" href="/frameworks/yii/recreation/web/index.php">Отдых</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <?php 
            echo Nav::widget([
            'options' => ['class' => ''],
            'items' => [
                ['label' => 'Выбрать страну', 'url' => ['/site/country-selection']],
                ['label' => 'Агрегаторы туров', 'url' => ['/site/aggregators']],
                ['label' => 'Чек-листы', 'url' => ['/site/show']],
                ['label' => 'Статьи', 'url' => ['/site/show-all-article']],
                ['label' => 'От разработчика', 'url' => ['/site/about']],
            ],
        ]); ?>
            </ul>
        </div>
    </nav>

</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted bg-warning bg-gradient">
    <div class="container">
        <p class="float-left">&copy; Сервис по подбору отдыха <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
