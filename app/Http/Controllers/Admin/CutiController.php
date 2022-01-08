<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cuti.index', [
            'keterangan'  => 'keterangan'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuti = DB::table('cuti')
            ->join('karyawan', 'cuti.cuti_id', '=', 'karyawan.karyawan_id')
            ->select(
                'karyawan.karyawan_id',
                'karyawan.nama',
                'cuti.keterangan',
                'cuti.tanggal_cuti',
                'cuti.tanggal_selesai_cuti',
                'cuti.lama_cuti',
                'cuti.sisa_cuti',
            )
            ->get();

        $karyawan = DB::table('karyawan')->get();

        $data = array(
            'karyawan'      => $karyawan,
            'cuti'          => $cuti,
        );
        //  dd($cuti);
        return view('admin.cuti.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('cuti')
            ->insert([
                'karyawan_id'           => $request->karyawan_id,
                'keterangan'            => $request->keterangan,
                'tanggal_cuti'          => $request->tanggal_cuti,
                'tanggal_selesai_cuti'  => $request->tanggal_selesai_cuti,
                'lama_cuti'             => $request->lama_cuti,
                // 'sisa_cuti'          => $request->sisa_cuti,
            ]);

        return redirect('/admin/cuti')
            ->with('sukses', 'Data Berhasil Di tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cuti_id)
    {
        //
        $cuti = DB::table('cuti')
            ->where('cuti_id', $cuti_id)
            ->first();

        // $karyawan = DB::table('karyawan')
        //     ->get();

        $data = array(
            'cuti'          => $cuti
            // 'karyawan'      => $karyawan
        );

        // return view('admin.cuti.edit', [
        //     'cuti'  => $cuti,
        // ]);
        return view('admin.cuti.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // $edit =  DB::table('cuti')
        DB::table('cuti')
            ->where('cuti_id', $request->cuti_id)
            ->update([
                'keterangan'            => $request->keterangan,
                'tanggal_cuti'          => $request->tanggal_cuti,
                'tanggal_selesai_cuti'  => $request->tanggal_selesai_cuti,
                'lama_cuti'             => $request->lama_cuti,

            ]);

        // if ($edit) {
        return redirect('admin/cuti')
            ->with('info', 'Data Berhasil Di Update !!! ');
        // } else {
        //     return redirect('admin/cuti')
        //         ->with('sukses', 'Error data gagal di Update Cuuu !!!');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cuti_id)
    {
        DB::table('cuti')
            ->where('cuti_id', $cuti_id)
            ->delete();
        //  $cuti->delete();
        return redirect('admin/cuti')
            ->with(['info' => 'Data Berhasil Di Hapus']);
    }


    public function detail($cuti_id)
    {
        $cuti = DB::table('cuti')
            ->where('cuti_id', $cuti_id)
            ->first();

        $data = array(
            'cuti'   => $cuti
        );
        return view('admin.cuti.detail', $data);
    }
}



// return DataTables::of($query)
// ->addColumn('action', 'admin.cuti.action')
// //->editColumn()
// // ->addColumn('') // mengarah ke action.blade.php
// ->addIndexColumn() // tambah colom
// // ->addIndexColumn() // tambah colom
// // ->addIndexColumn() // tambah colom
// ->rawColumns(['action'])
// ->toJson();



// public function GETdata(Request $request)
// {
//     // $query = DB::table('cuti')
//     //     ->join('karyawan', 'cuti.cuti_id', '=', 'karyawan.id')
//     //     ->select(
//     //         'cuti.cuti_id',
//     //         'cuti.keterangan',
//     //         'cuti.tanggal_cuti',
//     //         'cuti.tanggal_selesai_cuti',
//     //         'karyawan.id'
//     //     )
//     //     ->get();

//     // $query = Cuti::with('karyawan')->orderBy('tanggal_cuti', 'ASC')->get();

//     // $query->load('karyawan');

//     $query = DB::table('cuti');
//     // $query = DB::table('cuti')
//     //     ->join('karyawan', 'cuti.cuti_id', '=', 'karyawan.id');
//     //      ->get();

//     return DataTables::of($query)
//         ->addColumn('action', 'admin.cuti.action')
//         //  ->addIndexColumn() // tambah colom
//         ->addIndexColumn() // tambah colom
//         ->rawColumns(['action'])
//         ->toJson();
// }