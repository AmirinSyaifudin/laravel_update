<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jamkerja;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class JamkerjaController extends Controller
{
    //
    public function index()
    {
        $jamkerja  = DB::table('jamkerja')->get();

        return view('admin.jamkerja.index', compact('jamkerja'));
    }

    public function create(Request $request)
    {
        // $jamkerja = (int)$request->jamkerja;

        // if ($jamkerja <= 48) {
        //     $gaji = 2000 * $jam;
        // }

        // DB::table('jamkerja')
        //     ->insert([
        //         'jumlah_jam_kerja' => $request->jumlah_jam_kerja,
        //     ]);

        // return redirect('admin/jamkerja')->with('sukses', 'Data berhasil di tambahkan !!!');
    }
    //     Soal 
    // Karyawan honorer di perusahan XXX digaji berdasarkan jumlah jam kerjanya selama satu minggu. 
    // Upah per jamnya adalah Rp. 2.000,-. Bila jumlah jam kerja selama satu minggunya 
    // lebih besar dari 48 jam, maka sisanya dianggap jam lembur dengan upah 
    // per jam lemburnya adalah Rp.3.000,-

    // Buatlah form untuk memasukkan jumlah jam kerja selama satu minggu seorang karyawan. 
    // Setelah form disubmit, maka akan tampil jumlah upah yang diterima karyawan tersebut. 
    // Gunakan script PHP untuk membuat hal ini. 

    public function store(Request $request)
    {
        $jumlah_jam_kerja = (int)$request->jumlah_jam_kerja;

        if ($jumlah_jam_kerja <= 48) {
            $gaji_anda          = 2000 * $jumlah_jam_kerja;
            $jumlah_jam_kerja   = "JAM KERJA ANDA = $jumlah_jam_kerja jam";
            $gaji_anda          = "GAJI ANDA ADALAH =\tRp.$gaji_anda";
        } else {
            $lembur             = $jumlah_jam_kerja - 48;
            $jumlah_jam_kerja   = $jumlah_jam_kerja - $lembur;
            $gaji1              = 2000 * $jumlah_jam_kerja;
            $gaji2              = 3000 * ($lembur);
            $gaji_anda          = $gaji1 + $gaji2;
            $jumlah_jam_kerja   = "JAM KERJA ANDA = $jumlah_jam_kerja jam";
            $lembur             = "JAM LEMBUR ANDA = $lembur jam";
            $gaji_anda          = "GAJI ANDA ADALAH =\t Rp.$gaji_anda";
        }

        DB::table('jamkerja')
            ->insert([
                //'jamkerja'        => $request->jamkerja,
                'jumlah_jam_kerja' => $request->jumlah_jam_kerja,
                'gaji_anda'        => $gaji_anda,
            ]);

        return redirect('admin/jamkerja')->with('sukses', 'Data berhasil di tambahkan !!!');
    }

    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy($jamkerja_id)
    {

        DB::table('jamkerja')
            ->where('jamkerja_id', $jamkerja_id)
            ->delete();

        return redirect('admin/jamkerja')->with('sukses', 'Data berhasil di delete');
    }
}
