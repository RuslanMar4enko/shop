<?php
return array(
    '' => 'app/index',
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index', // actionIndex in NewsController
    'products' => 'product/list' // actionList in ProductControlle
);