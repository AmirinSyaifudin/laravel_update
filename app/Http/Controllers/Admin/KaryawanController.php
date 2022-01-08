<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Karyawan;
use App\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.karyawan.index', [
            'nama' => 'Nama Karyawan'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_induk'          => 'required|unique:karyawan',
            'nama'              => 'required',
            'alamat'            => 'required',
            'tanggal_lahir'     => 'required',
            'tanggal_bergabung' => 'required',
            'cover'             => 'file|image',
        ]);

        $cover = null;

        // cek kondisi cover 
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }

        DB::table('karyawan')
            ->insert([
                'no_induk'          => $request->no_induk,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'cover'             => $cover,
            ]);

        return redirect('admin/karyawan')
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
    public function edit($karyawan_id)
    {
        //
        // dd($karyawan);
        $karyawan = DB::table('karyawan')
            ->where('karyawan_id', $karyawan_id)
            ->first();
        //dd($karyawan_id);

        return view('admin.karyawan.edit', compact('karyawan'));

        // return view('admin.karyawan.edit', [
        //     'karyawan'  => $karyawan,
        // ]);

        // return view('admin.karyawan.edit', [
        //     //'no_induk'  => 'Edit Data Karyawan',
        //     'karyawan'  => $karyawan,
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $karyawan_id)
    {
        //
        // $this->validate($request, [
        //     'no_induk'          => 'required|unique:karyawan',
        //     'nama'              => 'required',
        //     'alamat'            => 'required',
        //     'tanggal_lahir'     => 'required',
        //     'tanggal_bergabung' => 'required',

        // ]);

        DB::table('karyawan')
            ->where('karyawan_id', $request->karyawan_id)
            ->update([
                'no_induk'          => $request->no_induk,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'tanggal_bergabung' => $request->tanggal_bergabung

            ]);
        return redirect('admin/karyawan')
            ->with('info', 'Data Berhasil Di Update !!! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($karyawan_id)
    {
        DB::table('karyawan')
            ->where('karyawan_id', $karyawan_id)
            ->delete();
        // $karyawan->delete();
        return redirect('admin/karyawan')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }

    public function detail($karyawan_id)
    {
        $karyawan = DB::table('karyawan')
            ->where('karyawan_id', $karyawan_id)
            ->first();

        $data = array(
            'karyawan'   => $karyawan
        );
        return view('admin.karyawan.detail', $data);
    }
}





    // public function GETdata(Request $request)
    // {
    //     $query = DB::table('karyawan')->get();

    //     // return DataTables::of($query)
    //     //     ->addColumn('action', 'admin.karyawan.action')
    //     //     ->addIndexColumn() // tambah colom
    //     //     ->rawColumns(['action'])
    //     //     ->toJson();

    //     return datatables()->of($query)
    //         ->addColumn('action', 'admin.karyawan.action')
    //         ->addIndexColumn() // tambah colom
    //         ->rawColumns(['action'])
    //         ->toJson();
    // }
