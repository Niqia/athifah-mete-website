<?php


namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
        // ddd($request); dump,die and debug


        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'slug' => 'required|unique:produk_jualans',
            'kategori_id' => 'required',
            'ukuran' => 'nullable',
            'harga' => 'required',
            'deskripsi' => 'nullable',
            'image' => 'image',

        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('produk-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        produk_jualan::create($validatedData);

        return redirect('/dashboard/produk_jualan')->with('success', 'Produk berhasil ditambahkan!');
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
        return view('dashboard\produk\edit', [
            'product' => $produk_jualan,
            'kategori' => Kategori::all()
        ]);
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
        $rules = [
            'nama_produk' => 'required|max:255',
            'kategori_id' => 'required',
            'ukuran' => 'nullable',
            'harga' => 'required',
            'image' => 'image',
            'deskripsi' => 'nullable',
            

        ];

        if($request->slug != $produk_jualan->slug){
            $rules['slug'] = 'required|unique:produk_jualans';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('produk-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 10);

        produk_jualan::where('id', $produk_jualan->id)
        
            ->update($validatedData);

        return redirect('/dashboard/produk_jualan')->with('success', 'produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk_jualan  $produk_jualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk_jualan $produk_jualan)
    {   

        if($produk_jualan->image){
            Storage::delete($produk_jualan->image);
        }
        produk_jualan::destroy($produk_jualan->id);

        return redirect('/dashboard/produk_jualan')->with('success', 'Produk berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(produk_jualan::class, 'slug', $request->nama_produk);
        return response()->json(['slug' => $slug]);
    }
}
