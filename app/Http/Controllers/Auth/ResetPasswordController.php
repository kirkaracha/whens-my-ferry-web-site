<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Auth;

use WhensMyFerry\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /* @var string */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }
}
