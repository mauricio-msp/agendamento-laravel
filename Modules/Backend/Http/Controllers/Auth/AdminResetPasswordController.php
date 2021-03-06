<?php

namespace Modules\Backend\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Modules\Backend\Http\Middleware\DisablePreventBack;

class AdminResetPasswordController extends Controller
{

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/backend/admin';

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
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * @return mixed
     */
    protected function broker()
    {
        return Password::broker('admins');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('Auth::auth.passwords.reset-admin')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
