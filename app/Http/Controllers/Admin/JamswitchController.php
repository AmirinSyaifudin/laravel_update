<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jamswitch;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class JamswitchController extends Controller
{
    //
    public function index()
    {
        $jamswitch = DB::table('jamswitch')->get();

        return view('admin.jamswitch.index', compact('jamswitch'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $jumlah_jam_kerja = (int)$request->jumlah_jam_kerja;

        switch ($request['gol_kerja']) {
            case 'A':
                $gol_kerja = 4000;
                break;
            case 'B':
                $gol_kerja = 5000;
                break;
            case 'C':
                $gol_kerja = 6000;
                break;
            case 'D':
                $gol_kerja = 7000;
                break;
            default:
                $gol_kerja = 0;
                break;
        }
        switch ($jumlah_jam_kerja) {
            case ($jumlah_jam_kerja <= 48);
                $gaji_anda      = $gol_kerja * $jumlah_jam_kerja;
                $jumlah_jam_kerja = "\t  $jumlah_jam_kerja";
                $gol_kerja        = "\t  $request[gol_kerja]";
                $gaji_anda        = " \t Rp. $gaji_anda";
                break;
            default:
                $jam_lembur_anda = $jumlah_jam_kerja - 48;
                $jam_lembur_anda = $jam_lembur_anda - $jam_lembur_anda;
                $gaji1           = $gol_kerja * $jam_lembur_anda;
                $gaji2           = 3000 * ($jam_lembur_anda);
                $gaji_anda       = $gaji1 + $gaji2;

                $jumlah_jam_kerja = " $jumlah_jam_kerja";
                $jam_lembur_anda = " $jam_lembur_anda";
                $gol_kerja      = "\t = $request[gol_kerja]";
                $gaji_anda       = "\t Rp. $gaji_anda";
                break;
        }

        DB::table('jamswitch')
            ->insert([
                'jumlah_jam_kerja'      => $request->jumlah_jam_kerja,
                'jumlah_lembur_anda'    => $jam_lembur_anda,
                'gol_kerja'             => $gol_kerja,
                'gaji_anda'             => $gaji_anda,
            ]);

        return redirect('admin.jamswitch')
            ->with('sukses', 'Data berhasil di tambahkan !!! ');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
