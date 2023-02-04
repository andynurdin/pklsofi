<?php

namespace App\Controllers;

class AdminDuasarjana extends BaseController
{
    public function index()
    {
        return view('admin/index', [
            "title" => "Dua Sarjana Per Desa"
        ]);
    }
}