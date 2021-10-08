<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Сервис отдыха';
?>
<div class="container">

    <div class="text-center bg-transparent">
        <h1 class="display-4">Сервис подбора страны для отдыха</h1>

    </div>

    <div class="row">
        <div class="col">

            <div id="carouselExampleDark" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleDark" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleDark" data-slide-to="1"></li>
                    <li data-target="#carouselExampleDark" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                    <img src="img/main/choice-country.jpg" width="100%" alt="выбор страны">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><mark class="bg-secondary bg-gradient text-white">Первый шаг</mark></h5>
                        <p>
                            <mark class="bg-secondary bg-gradient text-white">Подберите страну по критериям.</mark>
                        </p>
                    </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                    <img src="img/main/choice-tour.jpg" width="100%" alt="выбор тура">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5><mark class="bg-secondary bg-gradient text-white">Второй шаг</mark></h5>
                        <p>
                            <mark class="bg-secondary bg-gradient text-white">Подберите тур у агрегатора в удобное для вас время.</mark>
                        </p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/main/check-list.jpg" width="100%" alt="чек-лист">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5><mark class="bg-secondary bg-gradient text-white">Третий шаг</mark></h5>
                        <p>
                            <mark class="bg-secondary bg-gradient text-white">Соберите вещи по чек-листу.</mark>
                        </p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Назад</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Вперед</span>
                </a>
            </div>
        </div>
    </div>

    </div>
</div>
