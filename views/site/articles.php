<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\data\Pagination;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php

// блок вывода всех статей в 2 колонки: название статьи и картинка
echo Html::beginTag('div', ['class' => 'container']);
echo Html::beginTag('div', ['class' => 'row']);
    foreach ($articles as $article) {
        echo Html::beginTag('div', ['class' => 'col-xl-6 col-sm-12']);
        echo Html::beginTag('h3', ['class' => 'articles_heading']);
        $url = Url::to(['site/show-article', 'article_id' => $article->article_id]);
        echo Html::a($article->heading, $url, ['class' => 'link-dark']);
        echo Html::endTag('h3');
        echo Html::beginTag('a', ['href' => $url]);
        echo Html::img("$pathImg$article->name_image", ['alt' => $article->name_image, 'class' => 'mb-5 articles_image']);
        echo Html::endTag('a');
        echo Html::endTag('div');
    }
echo Html::endTag('div');
echo Html::endTag('div');

// блок пагинации
echo Html::beginTag('div', ['class' => 'container']);
echo Html::beginTag('div', ['class' => 'row']);
echo LinkPager::widget([
    'pagination' => $pagination, 
    'linkContainerOptions' => ['tag' => 'li', 'class' => 'page-item'],
    'linkOptions' => ['tag' => 'a', 'class' => 'page-link'],
    'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
]);
echo Html::endTag('div');
echo Html::endTag('div');

?>