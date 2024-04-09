<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [];


        // Load the view with the layout
        return view('layouts/templates/header')
        .view('home', $data)
        .view('layouts/templates/footer');

        }

    }
