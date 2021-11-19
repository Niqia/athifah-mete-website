<?php

namespace App\Http\Controllers;

use App\Models\produk_jualan;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'products' => produk_jualan::first(),
        ]);
        // return produk_jualan::first();
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
}
