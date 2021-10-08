<?php
    use yii\helpers\Html;

    $this->title = 'Агрегаторы туров';
?>

<h2 class="text-center mt-3 mb-4">Выберите тур через агрегатора тура или через поиск в интернете</h2>

<?php foreach ($query as $q): ?>
    <div class="container mb-5">
        <div class="row">
            <h3>
                <a class="link-dark" href="<?= Html::encode("{$q->link}") ?>">
                    <?= Html::encode("{$q->name}") ?>
                </a>
            </h3>
            <a href="<?= Html::encode("{$q->link}") ?>">
                <img src="<?= Html::encode("{$q->link_image}") ?>" alt="<?= Html::encode("{$q->name}") ?>" width = "100%">
            </a>
            <p class="mt-4 p_аggregators"> <?= Html::encode("{$q->description}") ?> </p>
        </div>
    </div>
<?php endforeach; ?>