<?php

namespace App\Http\Controllers;
use Auth;
use App\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
      return view('admin.login');
    }

    public function login(Request $request)
    {
      $credential = ['email' => $request->email, 'password' => $request->password];
      if (Auth::guard('admin')->attempt($credential)) {
        return redirect('/admin/home');
      }

      return "login admin gagal";
    }

    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect('/admin/login');
    }
}
