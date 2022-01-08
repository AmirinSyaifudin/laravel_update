<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Goljamkerja;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class GoljamkerjaController extends Controller
{
    //
    public function index()
    {
        $goljamkerja = DB::table('gol_jam_kerja')->get();

        return view('admin.goljamkerja.index', compact('goljamkerja'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $jumlah_jam_kerja = (int)$request->jumlah_jam_kerja;

        if ($jumlah_jam_kerja == 'TINGKATAN_A') {
            $tingkatan_kerja = 4000;
        } elseif ($jumlah_jam_kerja == 'TINGKATAN_B') {
            $tingkatan_kerja = 5000;
        } elseif ($jumlah_jam_kerja == 'TINGKATAN_C') {
            $tingkatan_kerja = 6000;
        } elseif ($jumlah_jam_kerja == 'TINGKATAN_D') {
            $tingkatan_kerja = 7000;
        }
        if ($jumlah_jam_kerja <= 48) {
            $gaji             = $tingkatan_kerja * $jumlah_jam_kerja;
            $jumlah_jam_kerja = "JAM KERJA ANDA = $jumlah_jam_kerja jam ";
            $tingkatan_kerja  = "GAJI ANDA ADALAH =\t Rp. $gaji";
        } else {
            $lembur             = $jumlah_jam_kerja - 48;
            $jumlah_jam_kerja   = $jumlah_jam_kerja - $lembur;
            $gaji1              = $tingkatan_kerja * $jumlah_jam_kerja;
            $gaji2              = 3000 * ($lembur); // 3000 = gaji lembur
            $gaji               = $gaji1 + $gaji2;
        }

        DB::table('gol_jam_kerja')
            ->insert([
                'jumlah_jam_kerja'  => $request->jumlah_jam_kerja,
                // 'tingkatan_kerja'   => $tingkatan_kerja,

            ]);

        return redirect('admin/goljamkerja')
            ->with('sukses', 'Data berhasil ditambahkan !!! ');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
