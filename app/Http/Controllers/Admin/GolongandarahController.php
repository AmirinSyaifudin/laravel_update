<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Golongandarah;
use Illuminate\Support\Facades\DB;

class GolongandarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $golongan_darah = DB::table('golongan_darah')->get();

        return view('admin.golongandarah.index', compact('golongan_darah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.golongandarah.create');
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
        DB::table('golongan_darah')
            ->insert([
                'nama_golongan_darah' => $request->nama_golongan_darah,
            ]);

        return redirect('/admin/golongandarah')
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
    public function edit($golongan_darah_id)
    {
        //
        $golongan_darah  = DB::table('golongan_darah')
            ->where('golongan_darah_id', $golongan_darah_id)
            ->first();

        $data  = array(
            'golongan_darah'      => $golongan_darah
        );

        return view('admin.golongandarah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $golongan_darah_id)
    {
        //
        $edit  = DB::table('golongan_darah')
            ->where('golongan_darah_id', $request->golongan_darah_id)
            ->update([
                'nama_golongan_darah'    => $request->nama_golongan_darah
            ]);

        if ($edit) {
            return redirect('admin/golongandarah')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/golongandarah')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($golongan_darah_id)
    {
        //
        DB::table('golongan_darah')
            ->where('golongan_darah_id', $golongan_darah_id)
            ->delete();

        return redirect('admin/golongandarah')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
