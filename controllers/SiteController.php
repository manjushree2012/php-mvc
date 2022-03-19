<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

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
    public function handleContact(Request $request)
    {
        //access request instance
        $body = $request->getBody();
        var_dump($body);
        return 'Handling submitted data here ...';
    }

}
