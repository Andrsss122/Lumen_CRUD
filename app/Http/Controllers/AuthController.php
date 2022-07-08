<?php

use App\Http\Controllers\Controller;
use auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\User;
use app\http\Requests\RegisterRequest;
use app\http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = new User([
            'names' => $request->names,
            'lastnames' => $request->lastnames,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,





        ]);

        return $user;


    }

}