<?php
namespace application\controllers;

use application\models\user;
use system\BaseController;
class userController extends BaseController {

    public function index()
    {
        return view('pages/home/home', [
            'user' => (new user) -> getFirstUser(),
        ]);
    }


}