<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Http\Middleware\DisablePreventBack;

class BackendController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend::index');
    }
}
