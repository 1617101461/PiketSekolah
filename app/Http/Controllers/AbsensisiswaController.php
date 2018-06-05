<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensisiswas;
use App\petugaspikets;
use App\siswas;
use App\kelas;
class AbsensisiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensisiswas = absensisiswas::with('siswas','petugaspikets','kelas')->get();
        return view('absensisiswa.index',compact('absensisiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugaspikets = petugaspikets::all();
        $siswas = siswas::all();
        $kelas = kelas::all();
        return view('absensisiswa.create',compact('petugaspikets', 'siswas','kelas'));
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
            'id_kelas'=>'required|',
            'id_siswas'=>'required|',
            'id_petugaspikets'=>'required|',
            'tanggal'=>'required|min:2',
            'keterangan'=>'required|min:2',
        ]);

        $absensisiswas = new absensisiswas;
        $absensisiswas->id_kelas = $request->id_kelas;
        $absensisiswas->id_siswas = $request->id_siswas;
        $absensisiswas->id_petugaspikets = $request->id_petugaspikets;
        $absensisiswas->tanggal = $request->tanggal;
        $absensisiswas->keterangan = $request->keterangan;
        $absensisiswas->save();
        return redirect()->route('absensisiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $absensisiswas = absensisiswas::findOrFail($id);
            return view('absensisiswa.show', compact('absensisiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensisiswas = absensisiswas::findOrFail($id);
        $siswas = siswas::all();
        $kelas = kelas::all();
        $petugaspikets = petugaspikets::all();
        $selectedsiswa = siswas::findOrFail($id)->id_siswas;
        $selectedkelas = kelas::findOrFail($id)->id_kelas;
        $selectedpetugaspiket = petugaspikets::findOrFail($id)->id_petugaspikets;
        return view('absensisiswa.edit',compact('siswas','kelas','petugaspikets','selectedsiswas', 'selectedkelas', 'selectedpetugaspiket'));
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
        
            'id_siswas'=>'required|max:255',
            'id_kelas'=>'required|max:255',
            'id_petugaspikets'=>'required|max:255',
            'tanggal'=>'required|min:2',
            'keterangan'=>'required|min:2',
        ]);

        $absensisiswas = absensisiswas::findOrFail($id);
        $absensisiswas->id_siswas = $request->id_siswas;
        $absensisiswas->id_kelas = $request->id_kelas;
        $absensisiswas->id_petugaspikets = $request->id_petugaspikets;
        $absensisiswas->tanggal = $request->tanggal;
        $absensisiswas->keterangan = $request->keterangan;
        $absensisiswas->save();
        return redirect()->route('absensisiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $absensisiswas = absensisiswas::findOrFail($id);
        $absensisiswas->delete();
    }
}
