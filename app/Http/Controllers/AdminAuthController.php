<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function auth(Request $request): void
    {
        abort_if($request->header('Authorization') !== config('auth.admin_auth'), 401);
    }
}
