<?php

namespace App\Controllers;

class HomeTugasakhir extends BaseController
{
    public function index()
    {
        return view('pages/tugasakhir', [
            "title" => "Bantuan Tugas Akhir"
        ]);
    }
}