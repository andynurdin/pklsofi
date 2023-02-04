<?php

namespace App\Controllers;

class HomeDuasarjana extends BaseController
{
    public function index()
    {
        return view('pages/duasarjana', [
            "title" => "Dua Sarjana Per Desa"
        ]);
    }
}