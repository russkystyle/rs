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
 * Class Article
 *
 * @property \App\Article $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Article extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = '\App\Article';

    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Статьи';

    /**
     * @var string
     */
    protected $alias = 'articles';

    /**
     * @return DisplayInterface
     */

    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Article::count();
        });

        $this->creating(function ($config, \Illuminate\Database\Eloquent\Model $model){

        });
    }

    public function onDisplay()
    {
        // todo: remove if unused
        return AdminDisplay::table()//->with('user')
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'Название статьи')->setWidth('400px'),
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
            AdminFormElement::file('photo', 'Главное фото'),
                AdminFormElement::file('thumb', 'Превью'),
            AdminFormElement::ckeditor('description', 'Текст'),
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
