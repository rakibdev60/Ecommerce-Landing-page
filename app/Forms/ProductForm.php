<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('price', 'number')
            ->add('product_type', 'select', [
                'choices' => $this->choices(),
            ]) 
            ->add('image', 'file')
            ->add('Save', 'submit', [
                'attr' => [
                    'class' => 'mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800',
                ]
            ]);
    }

    function choices()
    {
        return [
            'simple' => 'Simple Product',
            // 'variation' => 'Variation Product'
        ];
    }
}
