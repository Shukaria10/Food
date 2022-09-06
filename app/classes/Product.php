<?php


namespace App\classes;
use App\classes\Category;


class Product
{   public $products;
    public $category;
    public $categoryById;
    public $brand;
    public $result=[];
    public function getAllProduct()
    {
        return[
          0=>[
              'id' => 1,
              'category_id' => 1,
              'brand_id'=> 1,
              'name' => 'Pizza',
              'price' => '650',
              'image' => 'images.jpg',
              'description' => 'Spicy & Hot'
          ],
          1=>[
              'id' => 2,
              'category_id' => 2,
              'brand_id'=> 2,
              'name' => 'Burger',
              'price' => '550',
              'image' => 'image1.jpg',
              'description' => 'Spicy & Hot'
          ],
          2=>[
              'id' => 3,
              'category_id' => 3,
              'brand_id'=> 1,
              'name' => 'Pizza & Bread',
              'price' => '1650',
              'image' => 'images2.jpg',
              'description' => 'Spicy & Hot'
          ],
          3=>[
              'id' => 4,
              'category_id' => 4,
              'brand_id'=> 3,
              'name' => 'Noodles',
              'price' => '350',
              'image' => 'images5.jpg',
              'description' => 'Spicy & Hot'
          ],
          4=>[
              'id' => 5,
              'category_id' => 5,
              'brand_id'=> 4,
              'name' => 'Kebab',
              'price' => '600',
              'image' => 'images6.jpg',
              'description' => 'Spicy & Hot'
          ],
          5=>[
              'id' => 6,
              'category_id' => 6,
              'brand_id'=> 5,
              'name' => 'Cake',
              'price' => '650',
              'image' => 'images 7.jpg',
              'description' => 'Spicy & Hot'
          ],
            6=>[
                'id' => 7,
                'category_id' => 7,
                'name' => 'Cake',
                'price' => '650',
                'image' => 'images 8.jpg',
                'description' => 'Spicy & Hot'
            ],
            7=>[
                'id' => 8,
                'category_id' => 8,
                'name' => 'Cake',
                'price' => '650',
                'image' => 'images 9.jpg',
                'description' => 'Spicy & Hot'
            ],
        ];
    }

    public function getAllProductById($categoryId)
    {
           $this->products = $this->getAllProduct();
           foreach ($this->products as $product)
           {
               if($product['category_id']== $categoryId)
               {
                   array_push($this->result,$product);
               }
           }
           return $this->result;
    }
    public function getProductById($id)
    {
       $this->products = $this->getAllProduct();
       foreach ($this->products as  $product)
       {
              if($product['id']== $id)
              {
//                  return $product;
                  $this->category =new Category();
                  $this->categoryById= $this->category->getCategoryInfo($product['category_id']);
                  $product['category_name'] = $this->categoryById['name'];
                  return $product;

              }
       }
    }
}