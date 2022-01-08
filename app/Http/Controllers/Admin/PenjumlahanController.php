<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Penjumlahan;
use Illuminate\Support\Facades\DB;

class PenjumlahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jumlah = DB::table('penjumlahan')
            ->select(
                'penjumlahan.*',
                'penjumlahan.bil_satu',
                'penjumlahan.bil_dua',
                'penjumlahan.jumlah'
            )
            ->get();

        $data = array(
            'jumlah'  => $jumlah,
        );

        // dd($data);
        return view('admin.penjumlahan.index', $data);
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
        DB::table('penjumlahan')
            ->insert([
                'bil_satu'    => $request->bil_satu,
                'bil_dua'    => $request->bil_dua,
                'jumlah'    => $request->bil_satu + $request->bil_dua,
            ]);

        return redirect('admin/penjumlahan')
            ->with('sukses', 'Data Penjumlahan berhasil di Tambahkan');
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
    public function edit($penjumlahan_id)
    {
        //
        $jumlah = DB::table('penjumlahan')
            ->where('penjumlahan_id', $penjumlahan_id)
            ->first();

        $data = array(
            'jumlah'    => $jumlah
        );

        return view('admin.penjumlahan.edit', $data);
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
        $edit = DB::table('penjumlahan')
            ->where('penjumlahan_id', $request->penjumlahan_id)
            ->update([
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu + $request->bil_dua
            ]);

        if ($edit) {
            return redirect('admin/penjumlahan')
                ->with('sukses', 'Data berhasil di Update');
        } else {
            return redirect('admin/penjumlahan')
                ->with('error', 'Data tidak bisa di Update Kampret');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($penjumlahan_id)
    {
        //
        DB::table('penjumlahan')
            ->where('penjumlahan_id', $penjumlahan_id)
            ->delete();

        return redirect('admin/penjumlahan')
            ->with(['info'   => 'Data berhasil di hapus']);
    }
}
