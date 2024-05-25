<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peran::all();
        return view('peran.index')->with('perans', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peran.create');
    }

    
    public function view_pdf()
    {
        $data = Peran::all();
        $pdf = Pdf::loadView('pdf.peran', ['peran' => $data]);
        return $pdf->download('peran.pdf');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'peran' => 'required|in:supir,pegawai',
        ]);

        $peran = new Peran();
        $peran->status = $validatedData['peran'];
        $peran->save();

        return redirect()->to('peran')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($status)
    {
        $peran = Peran::where('status', $status)->firstOrFail();
        return view('peran.edit')->with('peran', $peran);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $status)
    {
        $validatedData = $request->validate([
            'peran' => 'required|in:supir,pegawai',
        ]);

        $peran = Peran::where('status', $status)->firstOrFail();
        $peran->status = $validatedData['peran'];
        $peran->save();

        return redirect()->route('peran.index')->with('success', 'Data peran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($status)
    {
        $peran = Peran::where('status', $status)->firstOrFail();
        $peran->delete();

        return redirect()->route('peran.index')->with('success', 'Data peran berhasil dihapus.');
    }
}
