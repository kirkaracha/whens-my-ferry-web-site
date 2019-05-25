<?php

declare(strict_types=1);

namespace WhensMyFerry\Http\Controllers\Auth;

use WhensMyFerry\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }
}
