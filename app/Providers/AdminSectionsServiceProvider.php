<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Order::class => 'App\Http\Sections\Orders',
        \App\News::class => 'App\Http\Sections\News',
        \App\Photo::class => 'App\Http\Sections\Photo',
        \App\PhotoAlbum::class => 'App\Http\Sections\PhotoAlbum',
        \App\MainPhotoAlbum::class => 'App\Http\Sections\MainPhotoAlbum',
        \App\Price::class => 'App\Http\Sections\Price',
        \App\Servises::class => 'App\Http\Sections\Servises',
        \App\Article::class => 'App\Http\Sections\Article',
        \App\Comment::class => 'App\Http\Sections\Comment',
        \App\Pages::class => 'App\Http\Sections\Pages',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
