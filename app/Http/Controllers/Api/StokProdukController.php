<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StokProduk;

class StokProdukController extends Controller
{
    public function index()
    {
        return response()->json(StokProduk::all());
    }

    public function store(Request $request)
    {
        $stokproduk = StokProduk::create($request->all());
        return response()->json($stokproduk, 201);
    }

    public function show($id)
    {
        return StokProduk::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $stokproduk = StokProduk::findOrFail($id);
        $stokproduk->update($request->all());
        return response()->json($stokproduk);
    }

    public function destroy($id)
    {
        StokProduk::destroy($id);
        return response()->json(null, 204);
    }
}
