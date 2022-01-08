<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agama;
use Illuminate\Support\Facades\DB;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agama = DB::table('agama')->get();

        return view('admin.agama.index', compact('agama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.agama.create');
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
        DB::table('agama')
            ->insert([
                'nama_agama' => $request->nama_agama,
            ]);

        return redirect('/admin/agama')
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
    public function edit($agama_id)
    {
        //
        $agama  = DB::table('agama')
            ->where('agama_id', $agama_id)
            ->first();

        $data  = array(
            'agama'      => $agama
        );

        return view('admin.agama.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $agama_id)
    {
        //
        $edit  = DB::table('agama')
            ->where('agama_id', $request->agama_id)
            ->update([
                'nama_agama'    => $request->nama_agama
            ]);

        if ($edit) {
            return redirect('admin/agama')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/agama')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($agama_id)
    {
        //
        DB::table('agama')
            ->where('agama_id', $agama_id)
            ->delete();

        return redirect('admin/agama')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
