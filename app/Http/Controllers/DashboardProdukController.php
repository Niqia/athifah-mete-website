<?php

namespace App\Http\Controllers;

use App\Models\produk_jualan;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard\produk\index', [
            'products' => produk_jualan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard\produk\create', [
            'kategori' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk_jualan  $produk_jualan
     * @return \Illuminate\Http\Response
     */
    public function show(produk_jualan $produk_jualan)
    {
        return view('dashboard\produk\show', [
            'products' => $produk_jualan,
        ]);
        
        // return $produk_jualan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk_jualan  $produk_jualan
     * @return \Illuminate\Http\Response
     */
    public function edit(produk_jualan $produk_jualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk_jualan  $produk_jualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produk_jualan $produk_jualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk_jualan  $produk_jualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk_jualan $produk_jualan)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(produk_jualan::class, 'slug', $request->nama_produk);
        return response()->json(['slug' => $slug]);
    }
}
