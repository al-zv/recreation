<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'От разработчика';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p> Меня зовут Зиновьев Алексей. Я автор данного проекта. </p>
    <p> Этот проект разработан на фреймворке Yii 2. </p>
    <p> Данный сервис разработан с целью выбора определенной страны по выбранным, пользователем критериям. </p>
    
    <code><?= __FILE__ ?></code>
</div>
