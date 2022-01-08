<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Statusperkawinan;
use Illuminate\Support\Facades\DB;

class StatusperkawinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $status_perkawinan = DB::table('status_perkawinan')->get();

        return view('admin.statusperkawinan.index', compact('status_perkawinan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.statusperkawinan.create');
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
        DB::table('status_perkawinan')
            ->insert([
                'nama_status_perkawinan' => $request->nama_status_perkawinan,
            ]);

        return redirect('/admin/statusperkawinan')
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
    public function edit($status_perkawinan_id)
    {
        //
        $status_perkawinan  = DB::table('status_perkawinan')
            ->where('status_perkawinan_id', $status_perkawinan_id)
            ->first();

        $data  = array(
            'status_perkawinan'      => $status_perkawinan
        );

        return view('admin.statusperkawinan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $status_perkawinan_id)
    {
        //
        $edit  = DB::table('status_perkawinan')
            ->where('status_perkawinan_id', $request->status_perkawinan_id)
            ->update([
                'nama_status_perkawinan'    => $request->nama_status_perkawinan
            ]);

        if ($edit) {
            return redirect('admin/statusperkawinan')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/statusperkawinan')
                ->with('error', 'Data tidak bisa di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($status_perkawinan_id)
    {
        //
        DB::table('status_perkawinan')
            ->where('status_perkawinan_id', $status_perkawinan_id)
            ->delete();

        return redirect('admin/statusperkawinan')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
