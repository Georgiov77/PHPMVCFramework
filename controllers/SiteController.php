<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "George Vlachos"
        ];
        return $this->render('home',$params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
       // var_dump($_POST);
        $body = $request->getBoby();
        var_dump($body);
        echo "Handling submitted data";
    }

}