<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Karyawan;
use App\Provinsi;
use App\Kota;
use App\Kabupaten;
use App\Pasien;
use App\Cuti;
use Illuminate\Support\Facades\DB;
use DataTables;

class DataController extends Controller
{
    //PROVINI
    public function provinsi()
    {
        $provinsi = Provinsi::orderBy('nama_provinsi', 'ASC');

        return datatables()->of($provinsi)
            ->addColumn('action', 'admin.provinsi.action')
            ->addIndexColumn() // membuat no urut
            ->rawColumns(['action'])
            ->toJson();
    }

    //KOTA
    public function kota()
    {
        // $kotas = kota::orderBy('keterangan', 'ASC');
        $kota = DB::table('kota')
            ->join('provinsi', 'kota.provinsi_id', '=', 'provinsi.provinsi_id')
            ->select(
                'kota.nama_kota',
                'kota.kode_pos',
                'kota.keterangan',
                'provinsi.nama_provinsi',
            )
            ->orderBy('kota.nama_kota', 'ASC')
            ->get();

        return datatables()->of($kota)
            ->addColumn('action', 'admin.kota.action')
            ->addIndexColumn()
            ->toJson();
    }

    //KABUPATEN
    public function kabupaten()
    {
        // $kabupatens = kabupaten::orderBy('keterangan', 'ASC');
        $kabupaten = DB::table('kabupaten')
            ->join('provinsi', 'kabupaten.provinsi_id', '=', 'provinsi.provinsi_id')
            ->join('kota', 'kabupaten.kota_id', '=', 'kota.kota_id')
            ->select(
                'kabupaten.nama_kabupaten',
                'kota.nama_kota',
                'provinsi.nama_provinsi',
                'kabupaten.kode_pos',
                'kabupaten.keterangan',
            )
            ->orderBy('kabupaten.nama_kabupaten', 'ASC')
            ->get();

        return datatables()->of($kabupaten)
            ->addColumn('action', 'admin.kabupaten.action')
            ->addIndexColumn()
            ->toJson();
    }



    public function karyawan()
    {
        $karyawans = Karyawan::orderBy('nama', 'ASC');

        return datatables()->of($karyawans)
            ->editColumn(
                'cover',
                function (Karyawan $model) {
                    return '<img src="' . $model->getCover() . '" height="100px">'; // untuk merubah cover menjadi format img
                }
            )
            ->addColumn('action', 'admin.karyawan.action')
            ->addIndexColumn() // membuat no urut
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

    public function cuti()
    {
        // $cutis = Cuti::orderBy('keterangan', 'ASC');
        $cutis = DB::table('cuti')
            ->join('karyawan', 'cuti.karyawan_id', '=', 'karyawan.karyawan_id')
            ->select(
                'cuti.*',
                'karyawan.nama'
            )
            ->orderBy('karyawan.nama', 'ASC')
            ->get();

        return datatables()->of($cutis)
            ->addColumn('action', 'admin.cuti.action')
            ->addIndexColumn()
            ->toJson();
    }

    //data Json
    public function pasien()
    {
        $pasien = DB::table('pasien')
            ->join('jenispasien', 'pasien.jenispasien_id', '=', 'jenispasien.jenispasien_id')
            ->join('poliklinik', 'pasien.poliklinik_id', '=', 'poliklinik.poliklinik_id')
            ->join('agama', 'pasien.agama_id', '=', 'agama.agama_id')
            ->join('golongan_darah', 'pasien.golongan_darah_id', '=', 'golongan_darah.golongan_darah_id')
            ->join('pekerjaan', 'pasien.pekerjaan_id', '=', 'pekerjaan.pekerjaan_id')
            ->join('pendidikan', 'pasien.pendidikan_id', '=', 'pendidikan.pendidikan_id')
            ->join('status_perkawinan', 'pasien.status_perkawinan_id', '=', 'status_perkawinan.status_perkawinan_id')
            ->join('suku', 'pasien.suku_id', '=', 'suku.suku_id')
            ->select(
                // 'pasien.*',
                'pasien.pasien_id',
                'pasien.nama_pasien',
                'pasien.no_rekam_medik',
                'pasien.tanggal_lahir',
                'jenispasien.jenispasien_id',
                'jenispasien.nama_jenis_pasien',
                'poliklinik.poliklinik_id',
                'poliklinik.nama_poliklinik',
                'agama.agama_id',
                'agama.nama_agama',
                'poliklinik.nama_poliklinik',
                'golongan_darah.golongan_darah_id',
                'golongan_darah.nama_golongan_darah',
                'pekerjaan.pekerjaan_id',
                'pekerjaan.nama_pekerjaan',
                'pendidikan.pendidikan_id',
                'pendidikan.nama_pendidikan',
                'status_perkawinan.status_perkawinan_id',
                'status_perkawinan.nama_status_perkawinan',
                'suku.suku_id',
                'suku.nama_suku'
            )
            ->orderBy('nama_pasien', 'ASC')
            ->get();

        return datatables()->of($pasien)
            ->addColumn('action', 'admin.pasien.action')
            //  ->addColumn()
            ->addIndexColumn()
            ->toJson();

        // return datatables()->of($pasien)
        //     ->addColumn()
        //     ->addIndexColumn()
        //     ->toJson();
    }
}


// public function karyawan()
// {
//     $karyawans = Karyawan::orderBy('nama', 'ASC');

//     return datatables()->of($karyawans)
//         ->addColumn('action', function (Karyawan $karyawan) {
//             return '<a href="' . route(
//                 'admin.karyawan.edit',
//                 $karyawan->karyawan_id
//             ) . '" 
//             class="btn btn-warning">Edit</a>';
//         })
//         ->addIndexColumn() // membuat no urut 
//         ->toJson();
// }


// public function karyawan()
// {
//     $karyawans = Karyawan::orderBy('nama', 'ASC');

//     return datatables()->of($karyawans)
//         ->addColumn('action', function (Karyawan $karyawan) {
//             return '<a href="' . route(
//                 'admin.karyawan.edit',
//                 $karyawan->karyawan_id
//             ) . '" 
//             class="btn btn-warning">Edit</a>
//             <a href="' . route(
//                 'admin.karyawan.destroy',
//                 $karyawan->karyawan_id
//             ) . '" 
//             class="btn btn-danger">Hapus</a>
//             ';
//         })
//         ->addIndexColumn() // membuat no urut 
//         ->toJson();
// }


    //     public function cuti()
    // {
    //     // $cuti = DB::table('cuti')
    //     //     ->get();

    //     $cuti = Cuti::orderBy('tanggal_cuti', 'ASC');

    //     return datatables()->of($cuti)
    //         ->addColumn()
    //         ->addIndexColumns()
    //         ->addColumn()
    //         ->toJson();
    // }



    // public function cuti()
    // {
    //     // $cutis = Cuti::orderBy('keterangan', 'ASC');
    //     // $cutis = DB::table('cuti')
    //     //     ->join('karyawan', 'cuti.karyawan_id', '=', 'karyawan.karyawan_id')
    //     //     ->orderBy('cuti.keterangan', 'ASC')->select('cuti.*', 'karyawan.nama');


    //     $cutis = DB::table('cuti')
    //         ->join('karyawan', 'cuti.karyawan_id', '=', 'karyawan.karyawan_id')
    //         ->select(
    //             'cuti.*',
    //             'karyawan.nama'
    //         )
    //         ->orderBy('cuti.keterangan', 'ASC')
    //         ->get();
    //     // $cutis = Cuti::with('karyawan')->orderBy('keterangan', 'ASC')->get();
    //     // $cutis->load('karyawan');
    //     //dd($cutis);

    //     return datatables()->of($cutis)
    //         // ->addColumn('karyawan', function (Cuti $cuti) {
    //         //     return $model->karyawan->nama;
    //         // })
    //         // ->editColumn('cover', function (Cuti $model) {
    //         //     return '<img src="' . $model->getcover() . '"height="150px">'; // untuk merubah cover menjadi format img
    //         // })
    //         ->addColumn('action', 'admin.cuti.action')
    //         ->addIndexColumn()
    //         ->toJson();
    // }


    // public function cuti()
    // {
    //     // $cutis = Cuti::orderBy('keterangan', 'ASC');
    //     $cutis = DB::table('cuti')
    //         ->join('karyawan', 'cuti.karyawan_id', '=', 'karyawan.karyawan_id')
    //         ->select(
    //             'cuti.*',
    //             'karyawan.nama'
    //         )
    //         ->orderBy('cuti.keterangan', 'ASC')
    //         ->get();

    //     return datatables()->of($cutis)
    //         ->addColumn('action', 'admin.cuti.action')
    //         ->addIndexColumn()
    //         ->toJson();
    // }