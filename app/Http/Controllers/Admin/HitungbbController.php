<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hitungbb;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class HitungbbController extends Controller
{
    //
    public function index()
    {
        $hitungbb = DB::table('hitungbb')->get();

        return view('admin.hitungbb.index', compact('hitungbb'));
    }

    public function create()
    {
    }

    // Soal 3
    // Berat badan ideal ada kaitannya dengan tinggi badan menentukan berat badan ideal rumusnya: 
    // tinggi badan – dikurangi lagi dengan 10% dari hasil penguranganpertama. seseorang. Untuk 100, 
    // lalu hasilnya

    // Berdasarkan keterangan tersebut, buatlah form yang digunakan untuk mengisikan tinggi badan
    //  seseorang (cm) dan berat badannya (kg). Setelah diisi, apabila form diklik maka akan muncul 
    //  keterangan “Berat badan Anda ideal” atau “Berat badan Anda tidak ideal”.

    // Berat badan seseorang dikatakan ideal apabila perbedaan berat badan orang tersebut terhadap 
    // berat badan idealnya tidak lebih dari 2 kg. Bila perbedaan keduanya lebih dari 2 kg, maka berat 
    // badannya dikatakan tidak ideal.    

    public function store(Request $request)
    {
        $berat_badan    = (int)$request->berat_badan;
        $tinggi_badan   = (int)$request->tinggi_badan;
        $keterangan     = "BERAT BADAN ANDA \t:$berat_badan";
        $keterangan     = "TINGGI BADAN ANDA \t:$tinggi_badan";
        $tinggi_badan   = ($tinggi_badan - 100) * 0.9;
        if (($tinggi_badan >= $berat_badan + 2) || ($tinggi_badan <= $berat_badan - 2)) {
            $keterangan = "BERAT BADAN ANDA TIDAK IDEAL, KAMU GEMMBROOOTT HAHA";
        } else {
            $keterangan = "BERAT BEDAN ANDA IDELA, OOYEEEACCH";
        }

        DB::table('hitungbb')
            ->insert([
                'berat_badan'      => $request->berat_badan,
                'tinggi_badan'     => $request->tinggi_badan,
                'keterangan'       => $keterangan,
            ]);

        return redirect('admin/hitungbb')->with('sukses', 'Data berhasil ditambahakan');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($hitungbb_id)
    {
        DB::table('hitungbb')
            ->where('hitungbb_id', $hitungbb_id)
            ->delete();

        return redirect('admin/hitungbb')->with(['info', 'Data berhasil di Hapus !!!']);
    }
}
