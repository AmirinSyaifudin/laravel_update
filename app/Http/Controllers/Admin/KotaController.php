<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use App\Kota;


class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.kota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kota = DB::table('kota')
        ->join('provinsi','kota.provinsi_id','=','provinsi_id')
        ->select([
            'provinsi.provinsi_id',
            'provinsi.nama_provinsi',
            'kota.nama_kota',
            'kota.kode_pos',
            'kota.keterangan',
        ])
        ->get();

        $provinsi = DB::table('provinsi')->get();

        $data = array(
            'kota'     => $kota,
            'provinsi'  =>$provinsi,
        );

        // dd($data);

        return redirect('admin/kota', $data)
        ->with('sukses','Data kota Berhasil di tambahkan !!! ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       DB::table('kota')
        ->insert([
            'nama_kota'         => $request->nama_kota,
            'kode_pos'          => $request->kode_pos,
            'keterangan'        => $request->keterangan,
            'nama_provinsi'     => $request->nama_provinsi,
        ]);

        // $provinsi = DB::table('provinsi')->get();

        // $data = array(
        //     'kota'     => $kota,
        //     'provinsi'  =>$provinsi,
        // );s

        // dd($data);

        return redirect('admin/kota')
        ->with('sukses','Data kota Berhasil di tambahkan !!! ');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
