<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Buku;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
	public function home()
	{
		$data=Buku::join('kategori','kategori.id_kategori','=','buku.kategori_id')->orderBy(DB::raw('RAND()'))->get();
		return view('home/home/index', compact('data'));
	}
	public function cek_buku($id_buku)
	{
		$data=Buku::join('kategori','kategori.id_kategori','=','buku.kategori_id')->where('buku.id_buku',$id_buku)->get();
		return view('home/cek-buku/cek', compact('data'));
	}
	public function profil_buyer()
	{
		$data=DB::table('users')->where('users.id',Auth::user()->id)->get();
		return view('home/profil-user/profil',compact('data'));
	}
	public function lengkapi(Request $request,$id)
	{
		DB::table('users')->where('id',$id)->update([
			'name'=>$request->name,
			'email'=>$request->email,
		]);		
		return redirect()->back()->with('biodata','-');
	}
	public function ganti_password(Request $request,$id)
	{
		DB::table('users')->where('id',$id)->update([
			'password'=>Hash::make($request->password),
		]);
		return redirect()->back()->with('password','-');
	}
	public function search(Request $request)
	{
		$keyword=$request->keyword;
		$data=Buku::join('kategori','kategori.id_kategori','=','buku.kategori_id')->where('buku.judul_buku','like',"%".$keyword."%")->get();
		return view('home/home/search', compact('data'));
	}
}
