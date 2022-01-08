<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jenispasien;
use Illuminate\Support\Facades\DB;

class JenispasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis_pasien = DB::table('jenispasien')->get();

        return view('admin.jenispasien.index', compact('jenispasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.jenispasien.create');
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
        DB::table('jenis_pasien')
            ->insert([
                'nama_jenis_pasien' => $request->nama_jenis_pasien,
            ]);

        return redirect('/admin/jenispasien')
            ->with('sukses', 'Data Berhasil Di Tambahkan!!!');
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
    public function edit($jenis_pasien_id)
    {
        //
        $jenis_pasien  = DB::table('jenis_pasien')
            ->where('jenis_pasien_id', $jenis_pasien_id)
            ->first();

        $data  = array(
            'jenis_pasien'      => $jenis_pasien
        );

        return view('admin.jenispasien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jenis_pasien_id)
    {
        //
        $edit  = DB::table('jenis_pasien')
            ->where('jenis_pasien_id', $request->jenis_pasien_id)
            ->update([
                'nama_jenis_pasien'    => $request->nama_jenis_pasien
            ]);

        if ($edit) {
            return redirect('admin/jenispasien')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/jenispasien')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($jenis_pasien_id)
    {
        //
        DB::table('jenis_pasien')
            ->where('jenis_pasien_id', $jenis_pasien_id)
            ->delete();

        return redirect('admin/jenispasien')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
