<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Панель навигации');
}]);

//Route::get('logout', ['as' => 'admin.user', function () {
//	$content = 'Новый пользователь';
//	return AdminSection::view($content, 'Новый пользователь');
//}]);

//Route::get('orders', ['as' => 'admin.orders', function () {
//	$content = 'Заказы';
//	return AdminSection::view($content, 'Новые заказы');
//}]);


Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Информация');
}]);