<?php


namespace App\classes;


class Brand
{
  public function getAllBrand()
  {
      return[
          0=>[
              'id' => 1,
              'name' => 'PizzaBurg',
          ],
          1=>[
              'id' => 2,
              'name' => 'ChilloxBurger',
          ],
          2=>[
              'id' => 3,
              'name' => 'NoddlesVan',
          ],
          3=>[
              'id' => 4,
              'name' => 'Shahi-Kebab-House',
          ],
          4=>[
              'id' => 5,
              'name' => 'Cake & Bakery',
          ],
      ];
  }
}