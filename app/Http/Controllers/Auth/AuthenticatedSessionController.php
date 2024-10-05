<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        /** Setup cookies */
        if ($request->has('remember')) {
            Cookie::queue('loginUser', $request->email, 1440);
            Cookie::queue('loginPassword', $request->password, 1440);
        }
        $user = Auth::user();
        $roleId = (int)$user->role_id;
        /** Cek Auth Role */
        switch ($roleId) {
            case 1:
                return redirect()->intended(route('adm.dashboard', absolute: false));
            case 2:
                return redirect()->intended(route('/guru/dashboard', absolute: false));
            case 3:
                return redirect()->intended(route('/siswa/dashboard', absolute: false));
            default:
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                abort('404', 'NOT FOUND');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public
    function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
