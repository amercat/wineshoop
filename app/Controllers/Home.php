<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $auth = service('authentication');
        $user = $userModel->find($auth->id());
        $username = ($user && is_object($user)) ? $user->username : '';

        $data['username'] = $username;

        echo view('layouts/templates/header', $data);
        echo view('home', $data); // pass the $data array to the view
        echo view('layouts/templates/footer');

        $user = $userModel->find($auth->id());
        print_r($user);
    }
    protected ?object $session;

    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth   = service('authentication');
    }

}
