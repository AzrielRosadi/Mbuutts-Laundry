<?php

namespace App\Http\Controllers;

use App\Models\DataPesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Search by Nomor HP.
     */
    public function searchNoHp(Request $request)
    {
        // Validation
        $request->validate([
            'noHp' => 'required|string|min:10'
        ]);

        // Search data
        $nomorHp = $request->noHp;
        $datas = DataPesanan::where('noHp', $nomorHp)->latest()->first(); // Fetch the latest order

        // Error handling
        if (!$datas) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }

        // Redirect to the receipt page
        return view('receipt', compact('datas'));
    }

    /**
     * Show all data for the admin.
     */
    public function index()
    {
        $datas = DataPesanan::orderBy('created_at', 'desc')->get();
        return view('admin', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nama' => 'required|string|max:255',
            'noHp' => 'required|numeric',
            'totalBerat' => 'required|numeric',
        ]);

        // Calculate total price
        $hargaPerkilo = 10000;
        $totalHarga = $hargaPerkilo * $request->totalBerat;

        // Store data
        DataPesanan::create([
            'nama' => $request->nama,
            'noHp' => $request->noHp,
            'total_berat' => $request->totalBerat,
            'total_harga' => $totalHarga,
            'status' => 'Belum Selesai'
        ]);

        // Redirect with success message
        return redirect()->route('dashboard.admin')->with('success', 'Pesanan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DataPesanan::find($id);

        // Check if data exists
        if (!$data) {
            return redirect()->route('dashboard.admin')->with('error', 'Data tidak ditemukan.');
        }

        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation
        $request->validate([
            'nama' => 'required|string|max:255',
            'noHp' => 'required|numeric',
            'totalBerat' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Find the data
        $data = DataPesanan::find($id);

        if (!$data) {
            return redirect()->route('dashboard.admin')->with('error', 'Data tidak ditemukan.');
        }

        // Calculate the total price
        $hargaPerkilo = 10000;
        $totalHarga = $hargaPerkilo * $request->totalBerat;

        // Update data
        $data->update([
            'nama' => $request->nama,
            'noHp' => $request->noHp,
            'total_berat' => $request->totalBerat,
            'total_harga' => $totalHarga,
            'status' => $request->status
        ]);

        // Redirect with success message
        return redirect()->route('dashboard.admin')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DataPesanan::find($id);

        // Check if data exists
        if (!$data) {
            return redirect()->route('dashboard.admin')->with('error', 'Data tidak ditemukan.');
        }

        // Delete the data
        $data->delete();

        // Redirect with success message
        return redirect()->route('dashboard.admin')->with('success', 'Data berhasil dihapus.');
    }

    /**
     * Show data for the owner.
     */
    public function owner()
    {
        $datas = DataPesanan::orderBy('created_at', 'desc')->get();
        return view('owner', compact('datas'));
    }

    /**
     * Search by Date.
     */
    public function searchDate(Request $request)
    {
        $date = $request->date;
        $resultDate = DataPesanan::where('created_at', 'like', '%' . $date . '%')->get();

        return view('owner', compact('resultDate'));
    }
}
