<?php
    use yii\helpers\Html;
?>

<?php
    // отображение статьи
    echo Html::tag('h1', $article->heading, ['class' => 'mb-4']);
    $date_created = Yii::$app->formatter->asDate($article->date_created, 'long');
    echo Html::tag('p', $date_created);
    echo $article->content;
    echo Html::beginTag('p');
    echo 'Ссылка на источник: ';
    echo Html::a($article->link, $article->link);
    echo Html::endTag('p');
?>