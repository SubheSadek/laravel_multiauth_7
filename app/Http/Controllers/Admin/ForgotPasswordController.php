<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function adminLinkRequestForm()
    {
        return view('admin.auth.forgot');
    }

    public function broker()
    {
        return Password::broker('admins');
    }


}
