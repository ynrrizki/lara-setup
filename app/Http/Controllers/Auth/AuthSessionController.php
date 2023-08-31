<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSessionController extends Controller
{
    /**
     * Redirect view from "/" to "/login".
     */
    public function index()
    {
        // dd(auth());
        // if (!is_null(auth()->user())) {
        //     if (auth()->user()->role == 'ADMIN') {
        //         return redirect('/dashboard/admin');
        //     } else if (auth()->user()->role == 'INSTITUTION') {
        //         return redirect('/dashboard/institution');
        //     }
        // }
        // return redirect('/login');
    }

    /**
     * Handle an incoming authetication request.
     */
    public function store(LoginRequest $request, string $role)
    {
        $page = RouteServiceProvider::HOME;

        // dd($request);

        $request->authenticate();
        $request->session()->regenerate();

        if (auth()->user()->role != $role) {

            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->back()->withInput()->with('notif-fail', 'Wahai pengguna, sepertinya kamu salah tempat login!');
        } else {

            if (auth()->user()->role == 'ADMIN') {
                // $page = '/dashboard/admin';
            }
            if (auth()->user()->role == 'INSTITUTION') {
                // $page = '/dashboard/institution';
            }
        }

        return redirect()->intended($page)->with('notif-success', 'Selamat datang kembali! ' . auth()->user()->name);
    }

    /**
     * Destroy on authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
