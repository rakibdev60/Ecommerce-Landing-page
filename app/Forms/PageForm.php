<?php

namespace App\Forms;

use App\Enums\TemplateType;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class PageForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', Field::TEXT, [
            // 'rules' => 'required|min:5'
        ])
        ->add('slug', Field::TEXT, [
            // 'rules' => 'max:5000'
        ])
        ->add('template_type', Field::SELECT, [
            'choices' => $this->choices(),
        ])
        ->add('Save', Field::BUTTON_SUBMIT, [
            'attr' => [
                'class' => 'mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800',
            ]
        ]);
    }

    function choices(): array {
        $array = [];

        foreach (TemplateType::cases() as $item) {
            $array[$item->value] = $item->name;
        }

        return $array;
    }
}
