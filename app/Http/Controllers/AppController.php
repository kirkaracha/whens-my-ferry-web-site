<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers;

use Illuminate\View\View;

class AppController extends Controller
{
    public function index(): View
    {
        return view('app');
    }
}
