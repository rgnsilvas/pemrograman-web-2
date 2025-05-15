<?php namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->getUser();
        return view('templates/header')
             . view('profile', $data)
             . view('templates/footer');
    }
}
