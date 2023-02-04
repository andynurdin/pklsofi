<?php

namespace App\Controllers;

class HomeScientist extends BaseController
{
    public function index()
    {
        return view('pages/scientist', [
            "title" => "Scientist"
        ]);
    }
}