<?php
use App\PhotoAlbum;

Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('home'));
});
Breadcrumbs::register('albums', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Галерея', route('albums'));
});
Breadcrumbs::register('album', function ($breadcrumbs, $album){
    $breadcrumbs->parent('albums');
    $breadcrumbs->push($album[0]->title, route('album', $album[0]->ref));
});
Breadcrumbs::register('servises', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Услуги', route('servises'));
});
Breadcrumbs::register('servise', function ($breadcrumbs, $servise){
    $breadcrumbs->parent('servises');
    $breadcrumbs->push($servise[0]->title, route('servise', $servise[0]->ref));
});

Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('О нас', route('about'));
});
Breadcrumbs::register('terms', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Условия проживания', route('terms'));
});

Breadcrumbs::register('rewards', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Грамоты', route('rewards'));
});
Breadcrumbs::register('comments', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Отзывы', route('comments'));
});
Breadcrumbs::register('articles', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Статьи', route('articles'));
});
Breadcrumbs::register('article', function ($breadcrumbs, $article){
    $breadcrumbs->parent('articles');
    $breadcrumbs->push($article[0]->title, route('article', $article[0]->ref));
});
Breadcrumbs::register('news', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Новости', route('news'));
});
//$test = \App\News::first();
//dd($test['ref']);
Breadcrumbs::register('new', function ($breadcrumbs, $new){
    $breadcrumbs->parent('news');
    $breadcrumbs->push($new[0]->title, route('new', $new[0]->ref));
});
Breadcrumbs::register('contacts', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Контакты', route('contacts'));
});