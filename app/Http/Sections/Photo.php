<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
//use App\Photo;
use App\PhotoAlbum;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Photo
 *
 * @property \App\Photo $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Photo extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    protected $model = 'App\Photo';

    /**
     * @var string
     */
    protected $title = 'Фото';

    /**
     * @var string
     */
    protected $alias = 'photos';

    /**
     * @return DisplayInterface
     */
    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Photo::count();
        });

        $this->creating(function ($config, \Illuminate\Database\Eloquent\Model $model){

        });
    }

    public function onDisplay()
    {
        // todo: remove if unused
        return AdminDisplay::table()->with('photoAlbums')
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'Заголовок фото')->setWidth('400px'),
                AdminColumn::text('photoAlbums.title', 'Фотоальбом'),
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
        return AdminForm::panel()->addBody([
            AdminFormElement::text('ref', 'Url фото'),
            //AdminFormElement::text('metatitle', 'Мета-тайтл'),
            //AdminFormElement::text('metakey', 'Ключи'),
            //AdminFormElement::text('metadesc', 'Описание'),
            //AdminFormElement::text('metacanonical', 'Мета-каноникал'),
        ])
            ->addBody([
                //AdminFormElement::text('ref', 'Имя')->required(),
                AdminFormElement::text('title', 'Title фото'),
                AdminFormElement::text('alt', 'Alt фото'),
                AdminFormElement::file('photo', 'Фото'),
                AdminFormElement::file('thumb', 'Превью'),
                AdminFormElement::select('photoalbums_id', 'Фотоальбом', PhotoAlbum::class)->setDisplay('title'),
                //AdminFormElement::images('photo.thumb', 'photo.thumb')->setLabel('Фотографии альбома'),
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
