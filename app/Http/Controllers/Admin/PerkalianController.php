<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Perkalian;
use Illuminate\Support\Facades\DB;

class PerkalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perkalian = DB::table('perkalian')->get();

        $data = array(
            'perkalian'  => $perkalian
            // 'date'  => $date
        );
        //  dd($data);


        return view('admin.perkalian.index', $data);
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
        DB::table('perkalian')
            ->insert([
                // 'tanggal'       => $request->tanggal,
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu * $request->bil_dua,
            ]);

        return redirect('admin/perkalian')
            ->with('sukses', 'Data berhasil di Tambahkan');
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
    public function edit($perkalian_id)
    {
        //
        $perkalian  = DB::table('perkalian')
            ->where('perkalian_id', $perkalian_id)
            ->first();

        $data  = array(
            'perkalian'      => $perkalian
        );

        return view('admin.perkalian.edit', $data);
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
        $edit =  DB::table('perkalian')
            ->where('perkalian_id', $request->perkalian_id)
            ->update([
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu * $request->bil_dua
            ]);

        if ($edit) {
            return redirect('admin/perkalian')
                ->with('sukses', 'Data Berhasil di Update !!!');
        } else {
            return redirect('admin/perkalian')
                ->with('error', 'Data tidak perkaliana di Update !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($perkalian_id)
    {
        //
        DB::table('perkalian')
            ->where('perkalian_id', $perkalian_id)
            ->delete();

        return redirect('admin/perkalian')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
