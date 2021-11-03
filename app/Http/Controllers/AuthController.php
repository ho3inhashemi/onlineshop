<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest as RequestsStoreAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showSignupForm(){
        return view('auth.signup');
    }



    public function showSigninForm(){
        return view('auth.signin');
    }



    public function signup(RequestsStoreAuthRequest $request ){

        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('auth.signin.form')
        ->with('message', 'You have registered successfully.');
    }



    public function signin(Request $request){

        $validated = $request->only(['email','password']);

        if($validated){

            if(auth()->attempt($validated)){

               return redirect()->route('home');
            }else{

               return back()
               ->with('message','ایمیل یا پسورد وارد شده صحیح نیست.');
            }
        }
    }




}
