<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hari;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class HariController extends Controller
{
	//
	public function index()
	{
		$hari = DB::table('hari')->get();

		return view('admin.hari.index', compact('hari'));
	}
	// public function create()
	// {

	// 	// 	if ($_POST["tombol_proses"] == "Proses")
	// 	// {	
	// 	// $nama = $_POST["textnama"];
	// 	// $tg = $_POST["texttg"];
	// 	// $bl = $_POST["textbl"];
	// 	// $th = $_POST["textth"];

	// 	$tanggal = mktime (0,0,0, $bl, $tg, $th) ;
	// 	$kode_hari = date ("w", $tanggal);

	// 	switch ($kode_hari)
	// 	{
	// 		case "0":
	// 		$hari= "Minggu";
	// 		break;

	// 		case "1":
	// 		$hari= "Senin";
	// 		break;

	// 		case "2":
	// 		$hari= "Selasa";
	// 		break;

	// 		case "3":
	// 		$hari= "Rabu";
	// 		break;

	// 		case "4":
	// 		$hari= "Kamis";
	// 		break;

	// 		case "5":
	// 		$hari= "Jumat";
	// 		break;

	// 		case "6":
	// 		$hari= "Sabtu";
	// 		break;
	// 	}
	// 			echo "Hai, $nama.<br>\n";
	// 			echo "Kamu lahir pada hari $hari";

	// 	}


	// }

	public function store(Request $request)
	{
		// if ($_POST["tombol_proses"] == "Proses") {
		// $nama = $_POST["textnama"];
		// $tg = $_POST["texttg"];
		// $bl = $_POST["textbl"];
		// $th = $_POST["textth"];

		// $tanggal = mktime(0, 0, 0, $bl, $tg, $th);
		// $kode_hari = date("w", $tanggal);

		$nama 			= $request->nama;
		$tanggal_lahir 	= (int)$request->tanggal_lahir;
		// $tg = $_POST["texttg"];
		// $bl = $_POST["textbl"];
		// $th = $_POST["textth"];

		$tanggal_lahir  = mktime(0, 0, 0, $tanggal_lahir);
		$keterangan     = date("w", $tanggal_lahir);

		switch ($keterangan) {
			case "0":
				$keterangan = "Minggu";
				break;

			case "1":
				$keterangan = "Senin";
				break;

			case "2":
				$keterangan = "Selasa";
				break;

			case "3":
				$keterangan = "Rabu";
				break;

			case "4":
				$keterangan = "Kamis";
				break;

			case "5":
				$keterangan = "Jumat";
				break;

			case "6":
				$keterangan = "Sabtu";
				break;
		}
		// echo "Hai, $nama.<br>\n";
		// echo "Kamu lahir pada hari $keterangan";

		$nama  			= "Hai, $nama";
		$keterangan 	= "Kamu lahir pada hari $keterangan ";
		// }

		DB::table('hari')
			->insert([
				'nama'			=> $request->nama,
				'tanggal_lahir'	=> $request->tanggal_lahir,
				'keterangan'	=> $keterangan,
			]);
		return redirect('admin/hari')->with('sukses', 'Data berhasil ditambahkan !!! ');
	}

	public function edit()
	{
	}
	public function update()
	{
	}

	public function destroy($hari_id)
	{
		DB::table('hari')
			->where('hari_id', $hari_id)
			->delete();

		return redirect('admin/hari')
			->with('sukses', 'Data berhasil di Hapus !!! ');
	}
}
