<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DoctorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Doctor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Doctor());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('gender', __('Gender'));
        $grid->column('faculty', __('Faculty'));
        $grid->column('birth', __('Birth'));
        $grid->column('degree', __('Degree'));
        $grid->column('address', __('Address'));
        $grid->column('description', __('Description'));
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
        $show = new Show(Doctor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('gender', __('Gender'));
        $show->field('faculty', __('Faculty'));
        $show->field('birth', __('Birth'));
        $show->field('degree', __('Degree'));
        $show->field('address', __('Address'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Doctor());

        $form->text('name', __('Name'))->rules('required');
        $form->select('gender', __('Gender'))->options(['Nam' => 'Nam', 'Nữ' => 'Nữ', 'Không xác định' => 'Không xác định'])->rules('required');
        $form->select('faculty', __('Faculty'))->options(['Tim mạch' => 'Tim mạch', 'Hô hấp' => 'Hô hấp', 'Tiêu hóa' => 'Tiêu hóa'])->rules('required');
        $form->date('birth', __('Date of birth'))->rules('required');
        $form->select('degree', __('Degree'))->options(['Điều dưỡng' => 'Điều dưỡng', 'Y tá' => 'Y tá', 'Bác sĩ' => 'Bác sĩ', 'Trưởng Khoa' => 'Trưởng khoa'])->rules('required');
        $form->text('address', __('Address'))->rules('required');
        $form->image('image',  __('Image'))->rules('required');
        $form->text('link_twitter', __('Twitter'));
        $form->text('link_facebook', __('Facebook'));
        $form->text('link_instagram', __('Instagram'));
        $form->text('link_discord', __('Discord'));
        $form->textarea('description', __('Description'));

        return $form;
    }
}
