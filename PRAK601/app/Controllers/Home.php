<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->getUser();
        return view('templates/header')
             . view('home', $data)
             . view('templates/footer');
    }
}
