<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class firstController extends Controller
{
    public function copy(): View
    {
        $navItems = [
            ['url' => url('https://www.google.com/'), 'name' => 'Google'],
            ['url' => url('https://www.bing.com/'), 'name' => 'Bing'],
            ['url' => route('main.index'), 'name' => 'Home'],
        ];

        return view('main.copy', ['navItems' => $navItems]);
    }

    public function index(): View
    {
        return view('main.index');
    }
}
