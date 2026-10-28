<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataBiodata'] = Biodata::all();
		return view('admin.biodata.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['nama'] = $request->nama;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['alamat'] = $request->alamat;
        $data['agama'] = $request->agama;
        $data['no_telp'] = $request->no_telp;
        $data['email'] = $request->email;
        if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('foto-biodata', 'public');
}

        Biodata::create($data);

        return redirect()->route('biodata.index')->with('success', 'Penambahan Data Berhasil!');
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
    public function edit(string $id)
    {
        $data['dataBiodata'] = Biodata::findOrFail($id);

        return view('admin.biodata.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodata_id = $id;
        $biodata = Biodata::findOrFail($biodata_id);

        $biodata->nama = $request->nama;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->alamat = $request->alamat;
        $biodata->agama = $request->agama;
        $biodata->no_telp = $request->no_telp;
        $biodata->email = $request->email;

        if ($request->hasFile('foto')) {
            $biodata->foto = $request->file('foto')->store('foto-biodata', 'public');
        }

        $biodata->save();

        return redirect()->route('biodata.index')
            ->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);

        $biodata->delete();
    
        return redirect()->route('biodata.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
