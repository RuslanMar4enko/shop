<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog' => 'catalog/index', // actionIndex в CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'user/register' => 'user/register',
    'user/logout' => 'user/logout',
    'user/login' => 'user/login',

    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAdd в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    'admin' => 'admin/index',

    'contacts' => 'app/contact',
    '' => 'app/index', // actionIndex в SiteController

);
