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
 * Class Price
 *
 * @property \App\Price $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Price extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = '\App\Price';

    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Цены';

    /**
     * @var string
     */
    protected $alias = 'prices';

    /**
     * @return DisplayInterface
     */

    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Price::count();
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
                AdminColumn::link('title', 'Название услуги')->setWidth('400px'),
                AdminColumn::text('price_base', 'Базовая стоимость')->setWidth('70px'),
                AdminColumn::text('price_discount', 'Стоимость со скидкой')->setWidth('70px'),
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
            AdminFormElement::text('ref', 'Url услуги'),
            AdminFormElement::text('metatitle', 'Мета-тайтл'),
            AdminFormElement::text('metakey', 'Ключи'),
            AdminFormElement::text('metadesc', 'Описание'),
            AdminFormElement::text('metacanonical', 'Мета-каноникал'),
        ])
            ->addBody([
                //AdminFormElement::text('ref', 'Имя')->required(),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::file('photo_1', 'Главное фото'),
                AdminFormElement::file('photo_2', 'Дополнительное фото'),
                AdminFormElement::ckeditor('description', 'Текст'),
                AdminFormElement::text('price_base', 'Базовая цена'),
                AdminFormElement::text('price_discount', 'Цена со скидкой'),
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
