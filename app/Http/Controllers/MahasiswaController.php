<?php

// app/Http/Controllers/MahasiswaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil data dari session, jika tidak ada, gunakan array kosong
        $mahasiswa = session()->get('mahasiswa', []);
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'prodi' => 'required',
        ]);

        // Ambil data mahasiswa dari session, atau array kosong jika tidak ada
        $mahasiswa = session()->get('mahasiswa', []);

        // Tambahkan data baru ke array
        $mahasiswa[] = $validatedData;

        // Simpan kembali ke session
        session()->put('mahasiswa', $mahasiswa);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($npm)
    {
        // Ambil data mahasiswa dari session
        $mahasiswa = session()->get('mahasiswa', []);

        // Cari mahasiswa berdasarkan NPM
        $mahasiswaData = collect($mahasiswa)->firstWhere('npm', $npm);

        return view('mahasiswa.edit', compact('mahasiswaData'));
    }

    public function update(Request $request, $npm)
    {
        // Validasi input
        $validatedData = $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'prodi' => 'required',
        ]);

        // Ambil data mahasiswa dari session
        $mahasiswa = session()->get('mahasiswa', []);

        // Update data mahasiswa
        $mahasiswa = collect($mahasiswa)->map(function ($item) use ($validatedData, $npm) {
            if ($item['npm'] == $npm) {
                return $validatedData;
            }
            return $item;
        })->toArray();

        // Simpan kembali ke session
        session()->put('mahasiswa', $mahasiswa);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($npm)
    {
        // Ambil data mahasiswa dari session
        $mahasiswa = session()->get('mahasiswa', []);

        // Hapus data berdasarkan NPM
        $mahasiswa = collect($mahasiswa)->filter(function ($item) use ($npm) {
            return $item['npm'] !== $npm;
        })->toArray();

        // Simpan kembali ke session
        session()->put('mahasiswa', $mahasiswa);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
