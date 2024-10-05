<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller implements HasMiddleware
{
    /**
         * Author: AlexistDev
         * Email: Alexistdev@gmail.com
         * Phone: 082371408678
         * Github: https://github.com/alexistdev
         */
    public static function middleware():array{
        return [
            new Middleware('auth'),
            new Middleware('roles:admin'),
        ];
    }

    public function index(){
        echo "Welcome to Dashboard";
    }
}
