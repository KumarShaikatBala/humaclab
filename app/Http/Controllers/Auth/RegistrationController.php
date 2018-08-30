<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Registration;
use function compact;
use function date;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function redirect;
use function view;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:humaclab',['except'=>['index','LoginForm','login','create','store']]);
    }
    public function index()
    {
        $humaclabs=Registration::all();
        return view('registration.pages.view',compact('humaclabs'));
    }

    public function create()
    {
        return view('registration.pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' =>'required|string|max:255',
            'last_name' =>'required|string|max:255',
            'user_name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|numeric|min:11',
            'date_of_birth' =>'required|date|string|before:18 years ago',
            'city' =>'required|string|max:255',
            'country' =>'required|string|max:255',
        ]);
        if($request->password_confirmation==$request->password){
            if( Registration::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_name' => $request->user_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'mobile' => $request->mobile,
                'date_of_birth' => $request->date_of_birth,
                'city' => $request->city,
                'country' => $request->country,

            ])){
                return redirect('login-form')->with('msg','Successfully Registration now log in with your email and password');
            }
        }
        return redirect('admin-signup');
    }
    public function LoginForm()
    {
        return view('registration.pages.login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('humaclab')->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('view')->with('msg', 'Successfully Log In !');
        }else{
            return redirect()->back()->with('email')->with('msg','wrong Email or Password !');
        }
    }
    public function logout()
    {
        Auth::guard('humaclab')->logout();
        return redirect('/')->with('msg','Successfully Log Out !');
    }
    public function show($id)
    {
        $humaclab=Registration::find($id);
        return view('registration.pages.userCrud',compact('humaclab'));
    }

    public function edit($id)
    {
        $humaclab=Registration::find($id);
        return view('registration.pages.edit',compact('humaclab'));
    }

    public function update(Request $request, $id)
    {
        $humaclab=Registration::find($id);
        $humaclab->update($request->all());
        return redirect('view')->with('msg','Successfully Updated !');
    }

    public function destroy($id)
    {
        Registration::destroy($id);
        return redirect('logout')->with('msg','Successfully Deleted your all information !');
    }
}
