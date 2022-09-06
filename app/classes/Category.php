<?php


namespace App\classes;


class Category
{
    public $categories;


    public function getCategoryInfo($id)
    {
        $this->categories = $this->getAllCategory();
        foreach ($this->categories as $category)
        {
            if($category['id']== $id)
            {
                return $category;
            }
        }
    }
    public function getAllCategory()
    {
        return[
            0=>[
                'id' => 1,
                'name' => 'Pizza',
            ],
            1=>[
                'id' => 2,
                'name' => 'Burger',
            ],
            2=>[
                'id' => 3,
                'name' => 'Pizza Bread',
            ],
            3=>[
                'id' => 4,
                'name' => 'Noodles',
            ],
            4=>[
                'id' => 5,
                'name' => 'Kebab',
            ],
            5=>[
                'id' => 6,
                'name' => 'Cake',
            ],
            6=>[
                'id' => 7,
                'name' => 'Pastry',
            ],

        ];
    }
}