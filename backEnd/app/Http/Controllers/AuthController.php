<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function registro(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        $token = $user->createToken($user->email.'-'.now());

        return response()->json(['user'=>$user,'token'=>$token->accessToken]);

    }

    public function login(Request $request){

        $request->validate([
        'email'=>'required|email|exists:users,email',
        'password'=> 'required|min:6'
        ]);
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $user=Auth::user();
            $token = $user->createToken($user->email.'-'.now());
            return response()->json([
            'token'=>$token->accessToken,
            'user'=>$user
            ]);
        }
        else{
            return response()->json([
            'error'=>"unauthorized"
            ]);
        }
    }
}