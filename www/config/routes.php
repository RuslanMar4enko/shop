<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog' => 'catalog/index', // actionIndex в CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'user/register' => 'user/register',
    'user/logout' => 'user/logout',
    'user/login' => 'user/login',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    '' => 'app/index', // actionIndex в SiteController

);
