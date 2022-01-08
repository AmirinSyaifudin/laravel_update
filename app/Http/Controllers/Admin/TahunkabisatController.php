<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Tahunkabisat;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class TahunkabisatController extends Controller
{
    //
    public function index()
    {
        $tahunkabisat = DB::table('tahunkabisat')->get();

        return view('admin.tahunkabisat.index', compact('tahunkabisat'));
    }

    public function create(Request $request)
    {
    }

    // soal 1
    //   Buatlah form untuk memasukkan bilangan yang menyatakan tahun.
    // Setelah form tersebut disubmit, 
    // maka akan muncul apakah tahun tersebut termasuk tahun kabisat atau tidak. 
    // Gunakan script PHP untuk membuat hal ini.

    public function store(Request $request)
    {
        $tahun = (int)$request->tahun;

        if ($tahun % 4 ==  0) {
            $keterangan = 'ADALAH TAHUN KABISAT';
        } else {
            $keterangan = 'ADALAH BUKAN TAHUN KABISAT';
        }

        DB::table('tahunkabisat')
            ->insert([
                'tahun'      => $request->tahun,
                'keterangan' => $keterangan,

            ]);

        return redirect('admin/tahunkabisat')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($tahunkabisat_id)
    {
        DB::table('tahunkabisat')
            ->where('tahunkabisat_id', $tahunkabisat_id)
            ->delete();

        return redirect('admin/tahunkabisat')
            ->with(['sukses' => 'Data berhasil di hapus !!! ']);
    }
}
