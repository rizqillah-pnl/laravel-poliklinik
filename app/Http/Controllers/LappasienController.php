<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LappasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tanggal_awal = date('Y-m-d', strtotime($request->tgl_awal)) . ' 00:00:00';
        $tanggal_akhir = date('Y-m-d', strtotime($request->tgl_akhir)) . ' 23:59:59';
        $title = "List Transaksi dari tanggal $tanggal_awal sampai tanggal $tanggal_akhir";
        $transaksis = Pasien::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->orderByRaw('created_at DESC')->get();
        // $transaksis = Transaksi::all();
        // dd($transaksis);
        return view('laporan.lappasien', [
            'title' => $title,
            'transaksis' => $transaksis,
        ])->with(compact());
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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
