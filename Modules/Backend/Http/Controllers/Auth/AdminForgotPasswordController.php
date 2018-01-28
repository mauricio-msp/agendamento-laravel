<?php

namespace Modules\Backend\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Modules\Backend\Http\Middleware\DisablePreventBack;

class AdminForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @param DisablePreventBack $disablePreventBack
     */
    public function __construct(DisablePreventBack $disablePreventBack)
    {
        $this->middleware($disablePreventBack);
    }

    /**
     * @return mixed
     */
    protected function broker()
    {
        return Password::broker('admins');
    }

    public function showLinkRequestForm()
    {
        return view('Auth::auth.passwords.email-admin');
    }
}
