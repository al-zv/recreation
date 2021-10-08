<?php

/* @var $this yii\web\View */
/* @var $model app\models\Checklist */

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\Menu;
    use yii\helpers\ArrayHelper;
    
    $this->title = 'Чек-листы';
?>

<?php

    echo Menu::widget([
        'items' => [
            ['label' => "Чек-лист перед поездкой", 'url' => ['/site/show', 'id' => 1] ],
            ['label' => "Что взять с собой на море. Летний чек-лист", 'url' => ['/site/show', 'id' => 2] ],
            ['label' => "Что взять с собой. Зимний чек-лист", 'url' => ['/site/show', 'id' => 3]],
            ['label' => "Чек-лист после поездки", 'url' => ['/site/show', 'id' => 4]],
            ['label' => "Путешествия по новым правилам", 'url' => ['/site/show', 'id' => 5]],
        ],
        'options' => ['tag' => 'false'],
        'itemOptions' => ['tag' => 'button', 'class' => 'btn bg-info bg-gradient mb-2'],
        'linkTemplate' => '<a href="{url}" class="text-white button_menu_checklist_link">{label}</a>',
    ]);
?>

<h3 class="mt-4 mb-4"> <?= Html::encode("{$model->name}") ?> </h3>

<div class="container">
    <div class="row">
        <div class="col-12">
                <?php
                    $data = ArrayHelper::toArray($model);
                    $size_model = count($data);
                    $size_item_model = ($size_model - 3) / 2;
                    for($i = 1; $i <= $size_item_model; $i++) {
                        if (isset($model->{'name_icon_item_' . $i})) {
                            echo Html::beginTag('div', ['class' => "icon"]);
                            echo Html::tag('i', '', ['class' => Html::encode("{$model->{'name_icon_item_' . $i}}")]);
                            echo Html::tag('text', Html::encode("{$model->{'item_' . $i}}"), ['class' => "mt-4"]);
                            echo "<br />";
                            echo Html::endTag('div');
                        }
                    }
                ?>
        </div>
    </div>
</div>