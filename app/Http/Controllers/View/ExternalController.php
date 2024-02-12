<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExternalController extends Controller
{
    public function ViewHome()
    {
        $data = array(
            'title' => 'Home',
            'page' => 'home',
        );

        return view('external.home.index',
            ['data' => $data]
        );
    }
}
