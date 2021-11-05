<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest as RequestsStoreAuthRequest;
use App\Models\User;
use App\Notifications\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;


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

        $user_find = DB::table('users')->where('email', $request->email)->first();
        $user_id = $user_find->id;
        $user = User::find($user_id);


        $enrollmentData = [
            'body' => 'You recieved a new test notification',
            'enrollmentText' => 'You are allowed to enroll',
            'url' => url('/mail'),
            'thank you' => 'You have 14 days to enroll'
        ];

        $user->notify(new WelcomeMail($enrollmentData));


        return redirect()->route('login')
        ->with('message', 'You have registered successfully.');
    }



    public function signin(Request $request){

        $validated = $request->only(['email','password']);

        if($validated){

            if(auth()->attempt($validated)){

               return redirect()->route('home');
            }else{

               return back()
               ->with('message','email or password is incorrect.');
            }
        }
    }

    public function logout(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()
    ->route('login');
    }


}
