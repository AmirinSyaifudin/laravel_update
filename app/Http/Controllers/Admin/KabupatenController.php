<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use App\Kota;
use App\Kabupaten;


class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.kabupaten.index');
    }

    public function dataKabupaten()
    {
        $kabupaten = DB::table('kabupaten')
        ->join('kota','kabupaten.kota_id','=','kota.kota_id')
        ->join('provinsi','kabupaten.provinsi_id','=','provinsi.provinsi_id')
        ->select(
            'kabupaten.nama_kabupaten',
            'kota.nama_kota',
            'provinsi.nama_provinsi',
        )
        ->orderBy('kabupaten.nama_kabupaten','ASC')
        ->get();

        return datatables()->of($kabupaten)
        ->addColumn('action','admin.kabupaten.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function destroy($kabupaten_id)
    {
        //
        DB::table('kabupaten')
        ->where('kabupaten_id', $kabupaten_id)
        ->first();

        return redirect('admin/kabupaten')
        ->with(['info' => 'Data berhasil di Hapus !!']);
    }
}
