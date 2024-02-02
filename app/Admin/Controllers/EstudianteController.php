<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Estudiante;

class EstudianteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Estudiante';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Estudiante());

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('id', __('Id'));
        $grid->column('cedula', __('Cedula'));
        $grid->column('nombres', __('Nombres'));
        $grid->column('fecha_nacimiento', __('Fecha nacimiento'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Estudiante::findOrFail($id));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('id', __('Id'));
        $show->field('cedula', __('Cedula'));
        $show->field('nombres', __('Nombres'));
        $show->field('fecha_nacimiento', __('Fecha nacimiento'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Estudiante());

        $form->text('cedula', __('Cedula'));
        $form->text('nombres', __('Nombres'));
        $form->text('fecha_nacimiento', __('Fecha nacimiento'));

        return $form;
    }
}
