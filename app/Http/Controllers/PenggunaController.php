<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = pengguna::all();
        return view('pengguna.index')->with('pengguna', $data);
    }

    public function view_pdf()
    {
        $data = pengguna::all();
        $pdf = Pdf::loadView('pdf.pengguna', ['pengguna' => $data]);
        return $pdf->download('pengguna.pdf');
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->name,
            'posisi' => $request->posisi,
            'username' => $request->username,
            'password' => $request->password
        ];
        pengguna::create($data);
        return redirect()->to('pengguna')->with('success', 'Berhasil tambah data');
    }

    public function edit(string $id)
    {
        $pengguna = pengguna::where('nama', $id)->first();
        return view('pengguna.edit')->with('pengguna', $pengguna);
    }

    public function update(Request $request, string $nama)
    {
        $data = [
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'username' => $request->username,
            'password' => $request->password
        ];
        pengguna::where('nama', $nama)->update($data);
        return redirect()->to('pengguna')->with('success', 'Berhasil Ubah Data');
    }

    public function destroy(string $id)
    {
        pengguna::where('nama', $id)->delete();
        return redirect()->to('pengguna')->with('success', 'Berhasil Hapus Data');
    }
}
