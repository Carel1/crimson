<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
	public function login()
	{
		return view('login');
	}
	public function cek_login(Request $request)
	{
		if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
			if (Auth::user()->level=="User") {
				return redirect('/');
			}else{
				return redirect(route('dashboard'));
			}
		}else{
			return redirect()->back()->with('salah','-');
		}
	}
	public function register()
	{
		return view('register');
	}
	public function daftar(Request $request)
	{
		$cek = User::where('email',$request->email)->first();
		if ($cek) {
			return redirect()->back()->with('emailsama','-');
		}else{
			$user = new User();
			$user -> name = substr($request->email, 0,5);
			$user -> email = $request -> email;
			$user -> password = Hash::make($request->password);
			$user -> level = 'User';
			$user -> save();
			return redirect(route('login'))->with('berhasilreg','-');
		}
	}
	public function logout()
	{
		Auth::logout();
		return redirect(route('login'));
	}
}
