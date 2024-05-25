<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supir = Supir::all();
        return view('supir.index', compact('supir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supir.create');
    }

    public function view_pdf()
    {
         $supir = Supir::all();
        $pdf = Pdf::loadView('pdf.supir', ['supir' => $supir]);
        return $pdf->download('supir.pdf');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'sim' => 'required',
        ]);
    
        $data = [
            'nama' => $request->nama,
            'sim' => $request->sim,
        ];
        Supir::create($data);
        return redirect()->route('supir.index')->with('success', 'Berhasil tambah data');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.edit', compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supir = Supir::findOrFail($id);
        $data = [
            'nama' => $request->nama,
            'sim' => $request->sim,
        ];
        $supir->update($data);
        return redirect()->route('supir.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supir = Supir::findOrFail($id);
        $supir->delete();
        return redirect()->route('supir.index')->with('success', 'Berhasil hapus data');
    }
}
