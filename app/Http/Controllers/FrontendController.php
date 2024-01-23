<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    function index()
    {
        $students = Student::orderBy('id', 'desc')->get();
        // dd($students);

        return view('welcome', compact('students'));
    }


    function about()
    {
        return view('about');
    }

    function aboutDetails($data)
    {

        dd($data);
    }

    function contact()
    {
        return view('contact');
    }

    function login(Request $request)
    {
        // $user = User::where('email',$request->email)->first();
        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         Auth::login($user);
        //     }
        // }
        // if(auth()->check()){

        // }

        // if (auth()->attempt(['email' => $request->input('username'), 'password' => $request->input('password')])) {
                //login user
        // }

        // $user = User::find(auth()->user()->id);

        // $username = auth()->user()->pass;
    }

    function getuser()
    {
        $user = User::all();
        return response([
            'message' => 'success',
            'status' => 200,
            'user' => $user
        ]);
    }
}
