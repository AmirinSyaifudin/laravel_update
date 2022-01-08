<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pekerjaan;
use Illuminate\Support\Facades\DB;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pekerjaan = DB::table('pekerjaan')->get();

        return view('admin.pekerjaan.index', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pekerjaan.create');
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
        DB::table('pekerjaan')
            ->insert([
                'nama_pekerjaan' => $request->nama_pekerjaan,
            ]);

        return redirect('/admin/pekerjaan')
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
    public function edit($pekerjaan_id)
    {
        //
        $pekerjaan  = DB::table('pekerjaan')
            ->where('pekerjaan_id', $pekerjaan_id)
            ->first();

        $data  = array(
            'pekerjaan'      => $pekerjaan
        );

        return view('admin.pekerjaan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pekerjaan_id)
    {
        //
        $edit  = DB::table('pekerjaan')
            ->where('pekerjaan_id', $request->pekerjaan_id)
            ->update([
                'nama_pekerjaan'    => $request->nama_pekerjaan
            ]);

        if ($edit) {
            return redirect('admin/pekerjaan')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/pekerjaan')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pekerjaan_id)
    {
        //
        DB::table('pekerjaan')
            ->where('pekerjaan_id', $pekerjaan_id)
            ->delete();

        return redirect('admin/pekerjaan')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
