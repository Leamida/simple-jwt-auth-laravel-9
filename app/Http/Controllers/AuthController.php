<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $exp = 60 * 60;
    public function __construct()
    {
        $this->middleware(['auth:api'], ['except' => ['signin', 'signup']]);
    }

    public function signin(SigninRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $token = Auth::setTTL($this->exp)->attempt($credentials);
        if (!$token) {
            return badResponse("Invalid credential");
        }
        $data = [
            "token" => $token,
            "type" => "Bearer",
            "expired_in" => $this->exp
        ];
        return successResponse("Signin successfully", $data);
    }

    public function signup(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);
        $data = [
            "token" => $token,
            "type" => "Bearer",
            "expired_in" => $this->exp
        ];
        return successResponse("Signup successfully", $data);
    }

    public function signout()
    {
        Auth::logout();
        return successResponse("Signout successfuly");
    }

    public function refresh()
    {
        $data = [
            "token" => Auth::setTTL($this->exp)->refresh(),
            "type" => "Bearer",
            "expired_in" => $this->exp
        ];
        return successResponse("Token refresh successfully", $data);
    }
}
