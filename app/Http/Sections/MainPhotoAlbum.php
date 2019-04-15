<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class MainPhotoAlbum
 *
 * @property \App\MainPhotoAlbum $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class MainPhotoAlbum extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = '\App\MainPhotoAlbum';

    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Фото главная';

    /**
     * @var string
     */
    protected $alias = 'mainphotoalbum';

    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\MainPhotoAlbum::count();
        });

        $this->creating(function ($config, \Illuminate\Database\Eloquent\Model $model){

        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        // todo: remove if unused
        return AdminDisplay::table()//->with('user')
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'Заголовок фото')->setWidth('400px'),
                //AdminColumn::text('description', 'Текст статьи')->setWidth('200px'),
                AdminColumn::text('created_at', 'Дата создания')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        // todo: remove if unused
        return AdminForm::panel()
            ->addBody([
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::file('url', 'Главное фото'),
                AdminFormElement::file('thumbs', 'Уменьшенное фото'),
                AdminFormElement::text('alt', 'Альт')->required(),
                AdminFormElement::text('img_title', 'Тайтл фото'),
                AdminFormElement::datetime('updated_at', 'Дата редактирования'),
            ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
