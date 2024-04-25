<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use CodeIgniter\HTTP\ResponseInterface;

class ContactUsController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model  = new ContactModel();
    }

    public function index()
    {
// Load the view with the layout
        return view('layouts/templates/header')
            . view('pages/contact')
            . view('layouts/templates/footer');
    }
}
