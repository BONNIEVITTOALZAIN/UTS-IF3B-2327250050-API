<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasi = Reservasi::all();
        if ($reservasi->isEmpty()) {
            $response['message'] = 'tidak ada data reservasi';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = "Pengunjung ditemukan";
        $response['data'] = $reservasi;
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_Hotel' => 'required',
            'nama_Pelanggan' => 'required',
            'tanggal_reservasi' => 'required'

        ]);

        $reservasi = Reservasi::create($validate);
        if ($reservasi) {
            $response['success'] = true;
            $response['message'] = 'Reservasi berhasil ditambahkan';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $pengunjung = Pengunjung::find($pengunjung);
        // $data['success'] = true;
        // $data['message'] = 'detail data pengunjung';
        // $data['data'] = $pengunjung;
        // return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
