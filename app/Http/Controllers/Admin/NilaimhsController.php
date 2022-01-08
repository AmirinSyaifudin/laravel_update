<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Hari;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class NilaimhsController extends Controller
{
    //
    public function index()
    {
        $nilaimhs = DB::table('nilaimhs')->get();

        return view('admin.nilaimhs.index', compact('nilaimhs'));
    }
    public function create()
    {
        //         
        //     $nama   = $_POST['nama'];
        //     $makul  = $_POST['makul'];
        //     $absen  = $_POST['absen'];
        //     $tugas  = $_POST['tugas'];
        //     $uts    = $_POST['uts'];
        //     $uas    = $_POST['uas'];

        //     //menghitung nilai dari yang tadi kita input
        //     $nilai_absen = $absen * 0.1;
        //     $nilai_tugas = $tugas * 0.2;
        //     $nilai_uts   = $uts * 0.3;
        //     $nilai_uas   = $uas * 0.4;

        // //penjumlahan dari nilai-nilai yang sudah diinput
        // $nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

        // //menampilkan grade berdasarkan hasil nilai akhir
        //     if ($nilai_akhir>=80)
        //         {
        //         $grade = "A";
        //         }
        //         elseif ($nilai_akhir>=70)
        //         {
        //         $grade = "B";
        //         }
        //         elseif ($nilai_akhir>=50)
        //         {
        //         $grade = "C";
        //         }
        //         elseif ($nilai_akhir>=40)
        //         {
        //         $grade = "D";
        //         }
        //         else
        //         {
        //         $grade = "D";
        //         }

        // echo
        // "
        //     <h1> Tampil Niai Akhir</h1>
        //         Nama Mahasiswa : $nama <br>
        //         Mata Kuliah :  $makul <br>
        //         Nilai Absen : <b>$nilai_absen</b><br>
        //         Nilai Tugas : <b>$nilai_tugas</b><br>
        //         Nilai UTS   : <b>$nilai_uts</b><br>
        //         Nilai UAS   : <b>$nilai_uas</b><br>
        //     <h4>Nilai Akhir : $nilai_akhir</h4>
        //     <h4>Grade : $grade</h4>
        // ";
        // 
    }
    public function store(Request $request)
    {
        $nilai_absen  = (int)$request->nilai_abses;
        $nilai_tugas  = (int)$request->nilai_tugas;
        $nilai_uts    = (int)$request->nilai_uts;
        $nilai_uas    = (int)$request->nilai_uas;

        $nilai_absen     = $nilai_absen * 0.1;
        $nilai_tugas     = $nilai_tugas * 0.2;
        $nilai_uts       = $nilai_uts * 0.3;
        $nilai_uas       = $nilai_uas * 0.4;
        $nilai_akhir    = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;
        if ($nilai_akhir >= 80 && $nilai_akhir <= 100) {
            $grade = 'A';
        } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 79) {
            $grade = 'B';
        } elseif ($nilai_akhir >= 50 && $nilai_akhir <= 69) {
            $grade = 'C';
        } elseif ($nilai_akhir >= 40 && $nilai_akhir <= 49) {
            $grade = 'D';
        }
        // else {
        //     $grade = 'E';
        // }
        DB::table('nilaimhs')
            ->insert([
                'nama'             => $request->nama,
                'mata_kuliah'      => $request->mata_kuliah,
                'nilai_absen'      => $request->nilai_absen,
                'nilai_tugas'      => $request->nilai_tugas,
                'nilai_uts'        => $request->nilai_uts,
                'nilai_uas'        => $request->nilai_uas,
                'nilai_akhir'       => $nilai_akhir,
                'grade'             => $grade,
            ]);

        return redirect('admin/nilaimhs')->with('sukses', 'Data berhasil di tambahkan !!!');
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy($nilaimhs_id)
    {
        DB::table('nilaimhs')
            ->where('nilaimhs_id', $nilaimhs_id)
            ->delete();

        return redirect('admin/nilaimhs')
            ->with(['info' => 'Data berhasil di delete !!']);
    }
}
