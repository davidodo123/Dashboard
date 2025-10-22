<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    public function copy(): View
    {
        $arrayCondatos = [
            ['url' => 'https://www.google.com/', 'name' => 'Google'],
            ['url' => 'https://www.bing.com/', 'name' => 'Bing'],
            ['url' => route('main.index'), 'name' => 'Home'],
        ];

        return view('main.copy', ['arrayCondatos' => $arrayCondatos]);
    }

    public function index(): View
    {
        return view('main.index');
    }
}
