<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan daftar matakuliah";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan form untuk membuat matakuliah baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menyimpan matakuliah baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(?string $param2 = null)
    {
        if ($param2 == 'ST445') {
            return 'Anda mengakses matakuliah: ' .$param2;
        } else {
            return "Masukkan kode matakuliah! ";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $param2)
    {
        return "Menampilkan form mengedit matakuliah dengan kode: " .$param2;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $param2)
    {
        return "Memperbarui data matakuliah dengan kode: " . $param2;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $param2)
    {
        return "Menghapus data matakuliah dengan kode: " . $param2;
    }
}
