<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Container extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tugas 2'
        ];
        return view('Admin/Container', $data);
    }
}
