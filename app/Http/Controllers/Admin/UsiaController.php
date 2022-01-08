<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Usia;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;


class UsiaController extends Controller
{
    //
    public function index()
    {
        $usia = DB::table('usia')->get();

        return view('admin.usia.index', compact('usia'));
    }

    public function create()
    {
    }

    // soal 
    // Buatlah form untuk memasukkan usia seseorang (dalam tahun). Setelah form tersebut diisi 
    // dan kemudian disubmit, maka akan muncul keterangan apakah usia yang diisikan tersebut 
    // termasuk usia tua, dewasa, anak-anak, dan balita dengan kriteria sbb:

    // Usia Status
    // 0 – 5 Balita
    // 6 – 16 Anak-anak
    // 17 – 50 Dewasa
    // > 50 Tua 

    public function store(Request $request)
    {
        $usia = (int)$request->usia;
        if ($usia <= 5) {
            $golongan = "BALITA";
        } elseif ($usia >= 6 && $usia <= 16) {
            $golongan = "ANAK ANAK";
        } elseif ($usia >= 17 && $usia <= 50) {
            $golongan = "DEWASA";
        } elseif ($usia >= 51 && $usia <= 70) {
            $golongan = "ORANG TUA";
        }
        // if ($usia > 70) {

        // }
        DB::table('usia')
            ->insert([
                'usia'  => $request->usia,
                'golongan' => $golongan,
            ]);

        return redirect('admin/usia')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($usia_id)
    {
        DB::table('usia')
            ->where('usia_id', $usia_id)
            ->delete();

        return redirect('admin/usia')->with('sukses', 'Data berhasil di delete !!! ');
    }
}
