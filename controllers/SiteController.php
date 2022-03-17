<?php
namespace app\controllers;

use app\core\Application;

class SiteController
{
    //get method
    public static function contact()
    {
        $params = [
            'name' => 'Aashish',
            'address' => 'Banepa'
        ];
        return Application::$app->router->renderView('contact', $params);
        return 'inside get method of contact';
    }

    //post method
    public static function handleContact()
    {
        return 'Handling submitted data here ...';
    }

}
