<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Paralelo;

class ParaleloController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Paralelo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Paralelo());

        $grid->column('id', __('Id'));
        $grid->column('curso_id', __('Curso id'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('estado', __('Estado'));
        $grid->column('estudiante_id', __('Estudiante id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Paralelo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('curso_id', __('Curso id'));
        $show->field('nombre', __('Nombre'));
        $show->field('estado', __('Estado'));
        $show->field('estudiante_id', __('Estudiante id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Paralelo());

        $form->number('curso_id', __('Curso id'));
        $form->text('nombre', __('Nombre'));
        $form->text('estado', __('Estado'));
        $form->number('estudiante_id', __('Estudiante id'));

        return $form;
    }
}
