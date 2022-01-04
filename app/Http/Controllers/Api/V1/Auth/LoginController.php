<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function attemptLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        return Auth::attempt($credentials);
    }

    public function sendLoginResponse(Request $request)
    {
        return successResponse(
            'Login success',
            array_merge(
                $request->user()->only(['name', 'email']),
                [
                    'token' => $request->user()->createToken('')->plainTextToken,
                ]
            )
        );
    }

    public function sendFailedLoginResponse(Request $request)
    {
        return errorResponse(
            422,
            ['email' => trans('auth.failed')],
            'Login failed'
        );
    }
    
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return successResponse(
            'Logout success'
        );
    }
}
