<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswas;
use App\kelas;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = siswas::with('kelas')->get();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = siswas::all();
        $kelas = kelas::all();
        return view('siswa.create',compact('siswas', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nis'=>'required|max:255|unique:siswas',
            'nama'=>'required|min:2',
            'jk'=>'required|min:2',
            'tempat_lahir'=>'required|min:2',
            'tanggal_lahir'=>'required|min:2',
            'alamat'=>'required|min:2',
            'id_kelas'=>'required|',
        ]);

        $siswas = new siswas;
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->jk = $request->jk;
        $siswas->tempat_lahir = $request->tempat_lahir;
        $siswas->tanggal_lahir = $request->tanggal_lahir;
        $siswas->alamat = $request->alamat;
        $siswas->id_kelas = $request->id_kelas;
        $siswas->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kelas = kelas::findOrFail($id);
            return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $siswas = siswas::findOrFail($id);
        $kelas = kelas::all();
        $selectedkelas = kelas::findOrFail($id)->id_kelas;
        return view('absensiguru.edit',compact('siswas','kelas','selectedkelas'));
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
        $this->validate($request, [
        
            'nis'=>'required|max:255|unique:siswas',
            'nama'=>'required|min:2',
            'jk'=>'required|min:2',
            'tempat_lahir'=>'required|min:2',
            'tanggal_lahir'=>'required|min:2',
            'alamat'=>'required|min:2',
            'id_kelas'=>'required|',
        ]);

        $siswas = siswas::findOrFail($id);
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->jk = $request->jk;
        $siswas->tempat_lahir = $request->tempat_lahir;
        $siswas->tanggal_lahir = $request->tanggal_lahir;
        $siswas->alamat = $request->alamat;
        $siswas->id_kelas = $request->id_kelas;
        $siswas->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswas = siswas::findOrFail($id);
        $siswas->delete();
            return redirect()->route('siswa.index');
    }
}
