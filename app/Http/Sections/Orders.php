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
 * Class Orders
 *
 * @property \App\Order $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Orders extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = 'App\Order';



    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Заказы';

    /**
     * @var string
     */
    protected $alias = 'orders';

    /**
     * @return DisplayInterface
     */

    public function initialize(){
        $this->addToNavigation($priority = 500, function(){
            return \App\Order::count();
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
                AdminColumn::text('id', 'Номер')->setWidth('30px'),
                AdminColumn::link('name', 'Имя')->setWidth('100px'),
                AdminColumn::text('phone', 'Телефон'),
                AdminColumn::text('email', 'Email'),
                AdminColumn::text('created_at', 'Создан')
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
            AdminFormElement::text('id', 'Номер'),
            AdminFormElement::text('name', 'Имя'),
            AdminFormElement::text('phone', 'Телефон'),
            AdminFormElement::text('email', 'Email'),
            AdminFormElement::textarea('comment', 'Комментарий к заказу'),
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
