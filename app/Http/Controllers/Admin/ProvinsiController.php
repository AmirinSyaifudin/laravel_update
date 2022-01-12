<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.provinsi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('provinsi')
        ->insert([
            'nama_provinsi'           => $request->nama_provinsi,
            'tanggal_jadi_provinsi'   => $request->tanggal_jadi_provinsi,
            'keterangan'              => $request->keterangan,
        ]);

        return redirect('admin/provinsi')
        ->with('sukses','Data Provinsi Berhasil diTambahkan !!!');
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
        DB::table('provinsi')
        ->insert([
            'nama_provinsi'           => $request->nama_provinsi,
            'tanggal_jadi_provinsi'   => $request->tanggal_jadi_provinsi,
            'keterangan'              => $request->keterangan,
        ]);
        
        return redirect('admin/provinsi')
        ->with('sukses','Data Provinsi Berhasil diTambahkan !!!');
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
