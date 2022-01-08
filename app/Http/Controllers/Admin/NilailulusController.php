<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hitungparkir;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class NilailulusController extends Controller
{
    //
    public function index()
    {
        $nilailulus = DB::table('nilailulus')->get();

        return view('admin.nilailulus.index', compact('nilailulus'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $nilai = (int)$request->nilai;
        if ($nilai >= 90) {
            $keterangan        = "LULUS tepat waktu";
            $index_prestasi     = "IPK 3.8";
            $lulus_tahun        = "3.5 Tahun";
            $predikat           = "Clum load";
        } elseif ($nilai >= 80) {
            $keterangan        = "LULUS tepat waktu";
            $index_prestasi     = "IPK 3.7";
            $lulus_tahun        = "3.5 Tahun";
            $predikat           = "Clum load";
        } elseif ($nilai >= 70) {
            $keterangan        = "LULUS tepat waktu";
            $index_prestasi     = "IPK 3.6";
            $lulus_tahun        = "5 Tahun";
            $predikat           = "Hampir Clum load";
        } elseif ($nilai >= 60) {
            $keterangan        = "LULUS ";
            $index_prestasi     = "IPK 3.3";
            $lulus_tahun        = "4 Tahun";
            $predikat           = "Tidak Clum load";
        } elseif ($nilai >= 50) {
            $keterangan        = "LULUS ";
            $index_prestasi     = "IPK 2.7";
            $lulus_tahun        = "5 Tahun";
            $predikat           = " DI Bawah Clum load";
        } elseif ($nilai >= 40) {
            $keterangan        = "LULUS tepat ";
            $index_prestasi     = "IPK 2.5";
            $lulus_tahun        = "5 Tahun";
            $predikat           = "Tidak Clum load";
        } elseif ($nilai >= 30) {
            $keterangan        = "TIDAK LULUS";
            $index_prestasi     = "IPK 2.00";
            $lulus_tahun        = "6 Tahun";
            $predikat           = "Tidak Clum load";
        } elseif ($nilai >= 20) {
            $keterangan        = "Tidak lulus ";
            $index_prestasi     = "IPK 1.8";
            $lulus_tahun        = "7 Tahun";
            $predikat           = "Tidak Clum load";
        }
        DB::table('nilailulus')
            ->insert([
                'nilai'             => $request->nilai,
                'keterangan'        => $keterangan,
                'index_prestasi'    => $index_prestasi,
                'lulus_tahun'       => $lulus_tahun,
                'predikat'          => $predikat,
            ]);

        return redirect('admin/nilailulus')->with('info', 'Databerhasil di tambahkan !!! ');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($nilailulus_id)
    {
        DB::table('nilailulus')
            ->where('nilailulus_id', $nilailulus_id)
            ->delete();

        return redirect('admin/nilailulus')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
