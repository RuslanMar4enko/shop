<?php

class AppController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);


        require_once(ROOT . '/views/app/index.php');

        return true;
    }

}
