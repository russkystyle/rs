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
 * Class Comment
 *
 * @property \App\Comment $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Comment extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = '\App\Comment';

    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Отзывы';

    /**
     * @var string
     */
    protected $alias = 'comments';

    /**
     * @return DisplayInterface
     */
    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Comment::count();
        });

        $this->creating(function ($config, \Illuminate\Database\Eloquent\Model $model){

        });
    }

    public function onDisplay()
    {
        // todo: remove if unused
        return AdminDisplay::datatables()//->with('user')
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'Заголовок отзыва')->setWidth('400px'),
                AdminColumn::text('description', 'Краткий текст отзыва'),
                AdminColumn::custom()->setLabel('Размещен')->setCallback(function ($model) {
                    return $model->published ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
                })->setWidth('50px')->setHtmlAttribute('class', 'text-center')->setOrderable(false),
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
            AdminFormElement::text('ref', 'Url статьи'),
            AdminFormElement::text('metatitle', 'Мета-тайтл'),
            AdminFormElement::text('metakey', 'Ключи'),
            AdminFormElement::text('metadesc', 'Описание'),
            AdminFormElement::text('metacanonical', 'Мета-каноникал'),
        ])
            ->addBody([
                //AdminFormElement::text('ref', 'Имя')->required(),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::file('media', 'Фото / видео отзыва'),
                AdminFormElement::ckeditor('description', 'Текст'),
                AdminFormElement::text('name', 'Имя'),
                AdminFormElement::text('email', 'Email'),
                AdminFormElement::text('phone', 'Телефон'),
                AdminFormElement::checkbox('published', 'Опубликован'),
                AdminFormElement::datetime('created_at', 'Дата создания'),
                AdminFormElement::datetime('updated_at', 'Дата редактирования')
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
