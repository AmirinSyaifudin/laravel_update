<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suku;
use Illuminate\Support\Facades\DB;

class SukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suku = DB::table('suku')->get();

        return view('admin.suku.index', compact('suku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.suku.create');
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
        DB::table('suku')
            ->insert([
                'nama_suku' => $request->nama_suku,
            ]);

        return redirect('/admin/suku')
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
    public function edit($suku_id)
    {
        //
        $suku  = DB::table('suku')
            ->where('suku_id', $suku_id)
            ->first();

        $data  = array(
            'suku'      => $suku
        );

        return view('admin.suku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $suku_id)
    {
        //
        $edit  = DB::table('suku')
            ->where('suku_id', $request->suku_id)
            ->update([
                'nama_suku'    => $request->nama_suku
            ]);

        if ($edit) {
            return redirect('admin/suku')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/suku')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($suku_id)
    {
        //
        DB::table('suku')
            ->where('suku_id', $suku_id)
            ->delete();

        return redirect('admin/suku')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
