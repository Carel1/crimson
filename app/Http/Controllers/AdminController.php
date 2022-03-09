<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Buku;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
	public function dashboard()
	{
		return view('admin/dashboard/dashboard');
	}
	public function ubah_admin(Request $request,$id)
	{
		if ($request->password=="") {
			User::where('id',$id)->update([
				'name'=>$request->name,
				'email'=>$request->email,
			]);	
			return redirect()->back()->with('user_profil','-');
		}else{
			User::where('id',$id)->update([
				'name'=>$request->name,
				'email'=>$request->email,
				'password'=>hash::make($request->password),
			]);
			return redirect()->back()->with('user_profil','-');
		}
	}
	public function data_buku(Request $request)
	{
		$kategori=DB::table('kategori')->get();
		$data=DB::table('buku')->join('kategori','kategori.id_kategori','=','buku.kategori_id')->orderBy('buku.id_buku','DESC')->get();
		return view('admin/buku/buku',compact('data','kategori'));
	}
	public function addbuku(Request $request)
	{
		// if ($request->hasFile('gambar')) {
		foreach ($request->judul_buku as $key => $value) {
			$ambil=$request->file('gambar')[$key];
			$namafoto=md5($ambil->getClientOriginalName());
			// $ambil->move(\base_path()."/public/gambar", $namaFileBaru);
			// $name=$ambil->getClientOriginalName();
			$buku = new Buku();
			$buku -> kategori_id = $request -> kategori_id[$key];
			$buku -> judul_buku = $request -> judul_buku[$key];
			$buku -> penulis = $request -> penulis[$key];
			$buku -> tahun = $request -> tahun[$key];
			$buku -> gambar = $namafoto;
			$buku -> path = $ambil->move(\base_path()."/public/buku", $namafoto);
			$buku -> save();
		}
		return redirect()->back()->with('adlelang','-');	
		// }
	}
	public function updatebuku(Request $request,$id_buku)
	{
		if ($request->hasFile('gambar')) {
			$ambil=$request->file('gambar');
			$name=$ambil->getClientOriginalName();
			$namaFileBaru = uniqid();
			$namaFileBaru .= $name;
			$ambil->move(\base_path()."/public/buku", $namaFileBaru);
			DB::table('buku')->where('id_buku',$id_buku)->update([
				'kategori_id' => $request->kategori_id,
				'judul_buku' => $request->judul_buku,
				'penulis' => $request->penulis,
				'tahun' => $request->tahun,
				'gambar' => $namaFileBaru,
			]);
			return redirect()->back()->with('uplelang','-');	
		}else{
			DB::table('buku')->where('id_buku',$id_buku)->update([
				'kategori_id' => $request->kategori_id,
				'judul_buku' => $request->judul_buku,
				'penulis' => $request->penulis,
				'tahun' => $request->tahun,
			]);
			return redirect()->back()->with('uplelang','-');	
		}
	}
	public function deletebuku($id_buku)
	{
		DB::table('buku')->where('id_buku',$id_buku)->delete();
		return redirect()->back()->with('dellelang','-');
	}
	public function data_kategori()
	{
		$data=DB::table('kategori')->get();
		return view('admin/kategori/kategori',compact('data'));
	}
	public function addkategori(Request $request)
	{
		DB::table('kategori')->insert([
			'nama_kategori'=>$request->nama_kategori,
		]);
		return redirect()->back()->with('adjenis','-');
	}
	public function deletekategori($id_kategori)
	{
		DB::table('kategori')->where('id_kategori',$id_kategori)->delete();
		return redirect()->back()->with('deljenis','-');
	}
	public function updatekategori(Request $request,$id_kategori)
	{
		DB::table('kategori')->where('id_kategori',$id_kategori)->update([
			'nama_kategori'=>$request->nama_kategori
		]);
		return redirect()->back()->with('upjenis','-');
	}
	public function data_user()
	{
		$data=User::where('level','User')->get();
		return view('admin/user/user',compact('data'));
	}
	public function update_user(Request $request,$id)
	{
		if ($request->password=="") {
			User::where('id',$id)->update([
				'name'=>$request->name,
				'email'=>$request->email,
			]);	
			return redirect()->back()->with('upuser','-');
		}else{
			User::where('id',$id)->update([
				'name'=>$request->name,
				'email'=>$request->email,
				'password'=>hash::make($request->password),
			]);
			return redirect()->back()->with('upuser','-');
		}
	}
	public function delete_user($id)
	{
		User::where('id',$id)->delete();
		return redirect()->back()->with('deluser','-');
	}
}
