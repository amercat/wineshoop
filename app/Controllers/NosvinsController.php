<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NosvinsModel;

class NosvinsController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model  = new NosvinsModel();
    }

    public function index()
    {
        // Fetch data from the model
        $data['bottle'] = $this->model->getAll();

        // Load the view with the layout
        return view('layouts/templates/header')
            . view('pages/nosvins', $data)
            . view('layouts/templates/footer');
    }

    public function view($id)
    {

        // Fetch data from the model
        $data['bottle'] = $this->model->ProductLookupById($id);

        // Load the views and return the rendered HTML
        return view('layouts/templates/header')
            .view ('pages/shopping', $data)
            .view('layouts/templates/footer');
    }

}
