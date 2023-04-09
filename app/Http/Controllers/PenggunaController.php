<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPengguna= pengguna::all();
        return view('pengguna.data-pengguna',compact('dtPengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create-pengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        pengguna::create([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'tgllhr'=>$request->tgllhr,
        ]);
        return redirect('data-pengguna')->withSuccess('Berhasil Menambahkan Pengguna!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string  $id)
    {
        $pen = pengguna::findorfail($id);
        return view('pengguna.edit-pengguna', compact('pen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pen = pengguna::findorfail($id);
        $pen->update($request->all());
        return redirect('data-pengguna')->withSuccess('Berhasil Update Data Pengguna!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = pengguna::findorfail($id);
        $pen->delete();
        return back()->with('info','Data Telah Berhasil Dihapus');
    }
}
