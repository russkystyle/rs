<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('Пользователи')->setIcon('fa fa-dashboard')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Администратор')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//     $page
//         ->addPage()
//         ->setTitle('Пользователь')
//         ->setUrl(route('admin.user'))
//         ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Панель навигации',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Общая информация',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-user')
                ->setTitle('Пользователи')
                ->setUrl('admin/user')
                ->setPriority(0),
            (new Page(\App\Order::class))
                ->setIcon('fa fa-group')
                ->setTitle('Заказы')
                ->setUrl('admin/orders')
                ->setPriority(100)
        ],
    ],

    // Examples
//     [
//        'title' => 'Content',
//        'pages' => [
//
//            \App\User::class,
//
//            // or
//
//            (new Page(\App\User::class))
//                ->setPriority(100)
//                ->setIcon('fa fa-user')
//                ->setUrl('users')
//                ->setAccessLogic(function (Page $page) {
//                    return auth()->user()->isSuperAdmin();
//                }),
//
//            // or
//
//            new Page([
//                'title'    => 'News',
//                'priority' => 200,
//                'model'    => \App\News::class
//            ]),
//
//            // or
//            (new Page(/* ... */))->setPages(function (Page $page) {
//                $page->addPage([
//                    'title'    => 'Blog',
//                    'priority' => 100,
//                    'model'    => \App\Blog::class
//			      ));
//
//			      $page->addPage(\App\Blog::class);
//    	      }),
//
//            // or
//
//            [
//                'title'       => 'News',
//                'priority'    => 300,
//                'accessLogic' => function ($page) {
//                    return $page->isActive();
//    		      },
//                'pages'       => [
//
//                    // ...
//
//                ]
//            ]
//        ]
//     ]
];