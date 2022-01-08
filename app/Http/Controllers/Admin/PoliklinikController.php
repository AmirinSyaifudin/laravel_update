<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Poliklinik;
use Illuminate\Support\Facades\DB;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $poliklinik = DB::table('poliklinik')->get();

        return view('admin.poliklinik.index', compact('poliklinik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.poliklinik.create');
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
        DB::table('poliklinik')
            ->insert([
                'nama_poliklinik'       => $request->nama_poliklinik,
            ]);

        return redirect('/admin/poliklinik')
            ->with('sukses', 'Data berhail di Tambahkan');
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
    public function edit($poliklinik_id)
    {
        //
        $poliklinik  = DB::table('poliklinik')
            ->where('poliklinik_id', $poliklinik_id)
            ->first();

        $data  = array(
            'poliklinik'      => $poliklinik
        );

        return view('admin.poliklinik.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $poliklinik_id)
    {
        //
        $edit  = DB::table('poliklinik')
            ->where('poliklinik_id', $request->poliklinik_id)
            ->update([
                'nama_poliklinik'    => $request->nama_poliklinik
            ]);

        if ($edit) {
            return redirect('admin/poliklinik')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/poliklinik')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($poliklinik_id)
    {
        //
        DB::table('poliklinik')
            ->where('poliklinik_id', $poliklinik_id)
            ->delete();

        return redirect('admin/poliklinik')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
