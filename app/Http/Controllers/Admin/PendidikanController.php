<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendidikan;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendidikan = DB::table('pendidikan')->get();

        return view('admin.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pendidikan.create');
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
        DB::table('pendidikan')
            ->insert([
                'nama_pendidikan' => $request->nama_pendidikan,
            ]);

        return redirect('/admin/pendidikan')
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
    public function edit($pendidikan_id)
    {
        //
        $pendidikan  = DB::table('pendidikan')
            ->where('pendidikan_id', $pendidikan_id)
            ->first();

        $data  = array(
            'pendidikan'      => $pendidikan
        );

        return view('admin.pendidikan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pendidikan_id)
    {
        //
        $edit  = DB::table('pendidikan')
            ->where('pendidikan_id', $request->pendidikan_id)
            ->update([
                'nama_pendidikan'    => $request->nama_pendidikan
            ]);

        if ($edit) {
            return redirect('admin/pendidikan')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/pendidikan')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pendidikan_id)
    {
        //
        DB::table('pendidikan')
            ->where('pendidikan_id', $pendidikan_id)
            ->delete();

        return redirect('admin/pendidikan')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
