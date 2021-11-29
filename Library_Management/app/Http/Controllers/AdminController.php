<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function DashboardView()
    {
        return view('admin_components.dashboard');
    }
    public function LoginView(Request $request)
    {
        return view('admin_components.login');
    }

    public function RegisterView(Request $request)
    {
        return view('admin_components.register');
    }
}
