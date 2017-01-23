<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class AppController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);


        require_once(ROOT . '/views/app/index.php');

        return true;
    }

}
