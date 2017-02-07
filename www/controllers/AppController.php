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

    public function actionContact()
    {

        $userEmail = '';
        $userText = '';
        $userSubject = '';
        $userName = '';
        $result = false;

        if (isset($_POST['submit'])) {

            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            $userSubject =  $_POST['userSubject'];
            $userName =  $_POST['name'];
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                $adminEmail = 'exsepl@mail.com';
                $message = " Имя: {$userName} Текст: {$userSubject}. Сообщение: {$userSubject}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }

        require_once(ROOT . '/views/app/contact.php');
        return true;
    }

}
