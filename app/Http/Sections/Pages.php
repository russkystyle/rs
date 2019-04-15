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
 * Class Pages
 *
 * @property \App\Pages $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section implements Initializable
{
    /**
     * @var string
     */
    protected $model = 'App\Pages';

    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Разделы сайта';

    /**
     * @var string
     */
    protected $alias = 'pages';

    /**
     * @return Initialize model
     */
    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Pages::count();
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
                AdminColumn::text('id', 'Номер')->setWidth('30px'),
                AdminColumn::link('title', 'Заголовок раздела')->setWidth('300px'),
                AdminColumn::text('created_at', 'Создан'),
                AdminColumn::text('updated_at', 'Обновлен')
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
            //AdminFormElement::text('id', 'Номер'),
            AdminFormElement::text('title', 'Заголовок раздела'),
            AdminFormElement::text('metatitle', 'Мета заголовок'),
            AdminFormElement::text('metakey', 'Мета ключи'),
            AdminFormElement::text('metadesc', 'Мета описание'),
            AdminFormElement::text('metacanonical', 'Мета каноникал'),
            AdminFormElement::number('nofollow', 'Индекс nofollow'),
            AdminFormElement::datetime('updated_at', 'Дата обновления'),
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
