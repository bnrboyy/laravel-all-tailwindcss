<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {

    }

    public function registerHandler(Request $req) {
        try {
            $validator = Validator::make($req->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|digits:8'
            ]);

            if ($validator->fails()) {
                return response([
                    'message' => 'validate error',
                    'errorMessage' => $validator->errors()
                ], 400);
            }

            $createUser = new User();

            $createUser->name = $req->name;
            $createUser->email = $req->email;
            $createUser->password = Hash::make($req->password);
            $result = $createUser->save();

            if ($result) {
                return response([
                    'message' => 'ok',
                    'description' => 'Created Successfully'

                ], 201);
            } else {
                return response([
                    'message' => 'error',
                    'description' => 'Created Error'
                ], 400);
            }

        } catch(Exception $e) {
            return response([
                'message' => 'server error',
                'description' => $e
            ], 500);
        }
    }


    public function onLogin(Request $req) {
        try {
            $loginData = [
                'email' => $req->email,
                'password' => $req->password
            ];

            if (Auth::attempt($loginData)) { # authenticate
                return response([
                    'message' => 'ok',
                    'description' => 'login successfully'
                ], 200);
            } else {
                return response([
                    'message' => 'error',
                    'description' => 'email or password is incorrect'
                ], 401);
            }
        } catch(Exception $e) {

        }

    }


    public function onLogout() {

        Auth::logout();
       return response()->json([
            'message' => 'logout ok'
       ]);

    }
}
