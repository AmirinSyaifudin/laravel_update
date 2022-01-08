<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Pembagian;
use Illuminate\Support\Facades\DB;

class PembagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembagian = DB::table('pembagian')->get();

        $data = array(
            'pembagian'  => $pembagian
            // 'date'  => $date
        );
        //  dd($data);

        return view('admin.pembagian.index', $data);
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
        DB::table('pembagian')
            ->insert([
                // 'tanggal'       => $request->tanggal,
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu / $request->bil_dua,
            ]);

        return redirect('admin/pembagian')
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
    public function edit($pembagian_id)
    {
        //
        $pembagian  = DB::table('pembagian')
            ->where('pembagian_id', $pembagian_id)
            ->first();

        $data  = array(
            'pembagian'      => $pembagian
        );

        return view('admin.pembagian.edit', $data);
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
        $edit =  DB::table('pembagian')
            ->where('pembagian_id', $request->pembagian_id)
            ->update([
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu / $request->bil_dua
            ]);

        if ($edit) {
            return redirect('admin/pembagian')
                ->with('sukses', 'Data Berhasil di Update !!!');
        } else {
            return redirect('admin/pembagian')
                ->with('error', 'Data tidak pembagiana di Update !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pembagian_id)
    {
        //
        DB::table('pembagian')
            ->where('pembagian_id', $pembagian_id)
            ->delete();

        return redirect('admin/pembagian')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
