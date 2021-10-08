<?php
    use yii\helpers\Html;
    use app\models\Countries;
    use yii\widgets\ActiveForm;

?>

<div class="container">
    <div class="row gx-0">
    <div class="col-12">
        <h2>Выберите критерий для вашего отдыха и мы подберем вам страну</h2>
    </div>
    <div class="col-6">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($country, 'ski_resort')->radioList(['Не нужен', 'Нужен'], 
            ['tag' => false, 'unselect' => 'unselect', 'disabled' => true, 'separator' => '&nbsp;&nbsp;'])
            ->label('Горнолыжный отдых:&nbsp;') ?>



        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <h1><?= $country->country_name ?></h1>
    </div>
    <div class="col-6">
        <?php
            print_r($country);
        ?>
    </div>
  </div>
</div>