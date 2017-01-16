<?php

class AppController
{


    public function actionIndex()
    {
        require_once(ROOT . '/views/app/index.php');
        return true;
    }


}