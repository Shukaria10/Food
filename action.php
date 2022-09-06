<?php
require_once 'vendor\autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllCategory();

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $product = new Product();
        $products = $product->getAllProduct();

        include 'pages/home.php';
    }
    elseif($_GET['page']=='category')
    {
        $categoryId = $_GET['id'];
        $product =  new Product();
        $products_info = $product->getAllProductById($categoryId);


        include 'pages/category.php';
    }
    elseif ($_GET['page']=='detail')
    {
        $productId = $_GET['id'];
        $product = new Product();
        $singleProduct = $product->getProductById($productId);

        include 'pages/detail.php';
    }
}
