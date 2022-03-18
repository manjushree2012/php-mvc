<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    //get method
    public function contact()
    {
        $params = [
            'name' => 'Aashish',
            'address' => 'Banepa'
        ];
        return $this->render('contact', $params);
        return 'inside get method of contact';
    }

    //post method
    public function handleContact()
    {
        return 'Handling submitted data here ...';
    }

}
