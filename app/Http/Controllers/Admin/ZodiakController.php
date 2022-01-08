<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Zodiak;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class ZodiakController extends Controller
{
	//
	public function index()
	{
		$zodiak = DB::table('zodiak')->get();

		return view('admin.zodiak.index', compact('zodiak'));
	}
	public function create()
	{

		// if ($_POST["tombol_proses"] == "Proses")
		// {
		// 	$nama = $_POST["textnama"];
		// 	$tg = $_POST["texttg"];
		// 	$bl = $_POST["textbl"];

		// 	$pesan= "";
		// 	if (($tg <1) or ($tg > 31))
		// 		$pesan = "Tanggal salah";
		// 	else
		// 		// Periksa keasahan $bl

		// 	if (($bl < 1) or ($bl > 12))
		// 		$pesan ="Bulan salah";

		// 	if ($pesan == "")
		// 	{
		// 		// Menentukan $zodiak
		// 	if (($bl == 3 and $tg >= 21) or ($bl == 4 and $tg <= 19))
		// 		$zodiak ='Aries';
		// 	else
		// 	if (($bl == 4 and $tg >= 20) or ($bl == 5 and $tg <= 20))
		// 		$zodiak ='Taurus';
		// 	else
		// 	if (($bl == 5 and $tg >= 21) or ($bl == 6 and $tg <= 20))
		// 		$zodiak ='Gemini';
		// 	else
		// 	if (($bl == 6 and $tg >= 21) or ($bl == 7 and $tg <= 22))
		// 		$zodiak ='Cancer';
		// 	else
		// 	if (($bl == 7 and $tg >= 23) or ($bl == 8 and $tg <= 22))
		// 		$zodiak ='Leo';
		// 	else
		// 	if (($bl == 8 and $tg >= 23) or ($bl == 9 and $tg <= 22))
		// 		$zodiak ='Virgo';
		// 	else
		// 	if (($bl == 9 and $tg >= 23) or ($bl == 10 and $tg <= 22))
		// 		$zodiak ='Libra';
		// 	else
		// 	if (($bl == 10 and $tg >= 23) or ($bl == 11 and $tg <= 21))
		// 		$zodiak ='Scorpio';
		// 	else
		// 	if (($bl == 11 and $tg >= 22) or ($bl == 12 and $tg <= 21))
		// 		$zodiak ='Sagitarius';
		// 	else
		// 	if (($bl == 12 and $tg >= 22) or ($bl == 10 and $tg <= 19))
		// 		$zodiak ='Capricorn';
		// 	else
		// 	if (($bl == 1 and $tg >= 20) or ($bl == 2 and $tg <= 18))
		// 		$zodiak ='Aquarius';
		// 	else
		// 	$zodiak ='Pisces';

		// 	echo "Hai, $nama.<br>\n";
		// 	echo "Zodiak kamu $zodiak";


		// 	}	
		// 	 else 
		// 		 echo $pesan;
		// }


	}
	public function store(Request $request)
	{
		//$nama  = $request->nama;
		//$tanggal_lahir  = mktime(0, 0, 0, $tanggal_lahir);
		$tanggal_lahir = (int)$request->tanggal_lahir;

		$keterangan = "";
		if (($tanggal_lahir < 1) or ($tanggal_lahir > 30)) {
			$keterangan = "tanggal salah";
		} else
		if (($tanggal_lahir < 1) or ($tanggal_lahir > 12)) {
			$keterangan  = "Bulan Salah";
		} else 
		if ($keterangan == "") {
			if (($tanggal_lahir == 3 and $tanggal_lahir >= 21) or ($tanggal_lahir == 4 and $tanggal_lahir <= 19)) {
				$keterangan = "Aries";
			} else
				    if (($tanggal_lahir == 4 and $tanggal_lahir >= 20) or ($tanggal_lahir == 5 and $tanggal_lahir <= 20)) {
				$keterangan = "Taurus";
			} else
					if (($tanggal_lahir == 5 and $tanggal_lahir >= 21) or ($tanggal_lahir == 6 and $tanggal_lahir <= 20)) {
				$keterangan = "Gemini";
			} else
					if (($tanggal_lahir == 6 and $tanggal_lahir >= 21) or ($tanggal_lahir == 7 and $tanggal_lahir <= 22)) {
				$keterangan = "Cancer";
			} else
					if (($tanggal_lahir == 7 and $tanggal_lahir >= 23) or ($tanggal_lahir == 8 and $tanggal_lahir <= 22)) {
				$keterangan = "Leo";
			} else
					if (($tanggal_lahir == 8 and $tanggal_lahir >= 23) or ($tanggal_lahir == 9 and $tanggal_lahir <= 22)) {
				$keterangan = "Virgo";
			} else
					if (($tanggal_lahir == 9 and $tanggal_lahir >= 23) or ($tanggal_lahir == 10 and $tanggal_lahir <= 22)) {
				$keterangan = "Libra";
			} else
					if (($tanggal_lahir == 10 and $tanggal_lahir >= 23) or ($tanggal_lahir == 11 and $tanggal_lahir <= 22)) {
				$keterangan = "Scorpio";
			} else
					if (($tanggal_lahir == 11 and $tanggal_lahir >= 22) or ($tanggal_lahir == 12 and $tanggal_lahir <= 21)) {
				$keterangan = "Sagitarius";
			} else
					if (($tanggal_lahir == 12 and $tanggal_lahir >= 22) or ($tanggal_lahir == 10 and $tanggal_lahir <= 19)) {
				$keterangan = "Capricon";
			} else 
					if (($tanggal_lahir == 1 and $tanggal_lahir > 20) or ($tanggal_lahir == 2 and $tanggal_lahir <= 18)) {
				$keterangan = "Aquarius";
			} else {
				$keterangan = "Pisces";
			}
		}

		DB::table('zodiak')
			->insert([
				'nama'             => $request->nama,
				'tanggal_lahir'    => $request->tanggal_lahir,
				'keterangan'       => $keterangan,
			]);

		return redirect('admin/zodiak')->with('admin', 'Data berhasil ditambahkan !!!');
	}
	public function edit()
	{
	}
	public function update()
	{
	}
	public function destroy($zodiak_id)
	{
		DB::table('zodiak')
			->where('zodiak_id', $zodiak_id)
			->delete();

		return redirect('admin/zodiak')
			->with('sukses', 'Data berhasil di Hapus !!!');
	}
}
