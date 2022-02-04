@extends('layouts.app')
@section('title')Product
@endsection

@section('content')
    <figure>
        <blockquote class="blockquote">
            <p>В приложении использую стили от bootstrap 5.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Сайт с подробной информацией <cite title="Source Title"><a href="https://getbootstrap.com/">находится на этой ссылке.</a></cite>
        </figcaption>
    </figure>
@endsection
@section('leftblock')
    @parent
    <p>В этом боковом поле можно фильтровать данные продуктов </p>
@endsection

@section('product')
    <section class="products mt-3">
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="img/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laravel в качестве сервера API</h5>
                        <p class="card-text">Laravel также может служить серверной частью API для одностраничного JavaScript-приложения или мобильного приложения. </p>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="6">Статья на модерации
                        </button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laravel как клиент-серверный фреймворк</h5>
                        <p class="card-text">Laravel может служить клиент-серверным фреймворком. </p>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="5">Статья на модерации
                        </button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Установка через Composer</h5>
                        <p class="card-text">Если на вашем компьютере уже установлены PHP и Composer, то вы можете создать новый проект Laravel напрямую с помощью Composer. </p>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="4">Статья на модерации
                        </button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Начало работы в Windows
                        </h5>
                        <p class="card-text">Прежде чем мы создадим новое приложение Laravel на вашем компьютере с
                            Windows, обязательно установите Docker Desktop. </p>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="3">Статья на модерации
                        </button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Почему именно Laravel?</h5>
                        <p class="card-text">При создании веб-приложения доступны инструменты и
                            фреймворки. Laravel – лучший выбор для создания современных
                            полнофункциональных веб-приложений. </p>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="2">Статья на модерации
                        </button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Установка</h5>
                        <p class="card-text">Laravel – фреймворк веб-приложения с выразительным, элегантным синтаксисом.
                            Веб-фреймворк предлагает структуру и отправную точку для создания вашего приложения,
                            позволяя вам сосредоточиться на создании чего-то удивительного, но пока мы не будем
                            вдаваться в детали. </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart"
                                data-product="1">Узнать больше
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
