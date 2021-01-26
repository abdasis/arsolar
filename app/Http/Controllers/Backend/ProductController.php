<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.product.create')->with([
            'categories' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $tr = new GoogleTranslate('en');
        try {
            DB::beginTransaction();
            $newProduct = new Product();
            $newProduct->nama_produk = ['id' => $request->get('nama_produk'), 'en' => $tr->translate($request->get('nama_produk'))];
            $newProduct->siput = Str::slug($request->get('nama_produk'));
            $newProduct->diskripsi = ['id' => $request->deskripsi_produk, 'en' => $tr->translate($request->deskripsi_produk)];
            $newProduct->kategori = ['id' => $request->get('kategori'), 'en' => $tr->translate($request->get('kategori'))];
            $newProduct->status_produk = $request->get('status');

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail_name = Str::slug($request->get('nama_produk'), '-') . '-' . $thumbnail->getClientOriginalName();
                $thumbnail->move('gambar-produk', $thumbnail_name);
                $newProduct->thumbnail = $thumbnail_name;
            } else {
                $newProduct->thumbnail = 'defaul-product-thumbnail.png';
            }
            $newProduct->save();
            DB::commit();
            Alert::success('Selamat', 'Data berhasil disimpan');
            return redirect()->back()->with(['status' => 'Produk Berhasil Disimpan!']);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
            return redirect()->back()->withStatus('Produk Gagal disimpan')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Product::find($id)->setLocale('id');
        $categories = Category::all();
        return view('backend.pages.product.edit')->withProduk($produk)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tr = new GoogleTranslate('en');
        try {

            DB::beginTransaction();
            $newProduct = Product::find($id);
            $newProduct->nama_produk = ['id' => $request->get('nama_produk'), 'en' => $tr->translate($request->get('nama_produk'))];
            $newProduct->siput = Str::slug($request->get('nama_produk'));
            $newProduct->diskripsi = ['id' => $request->deskripsi_produk, 'en' => $tr->translate($request->deskripsi_produk)];
            $newProduct->kategori = ['id' => $request->get('kategori'), 'en' => $tr->translate($request->get('kategori'))];
            $newProduct->status_produk = $request->get('status');

            if ($request->hasFile('thumbnail')) {
                if ($newProduct->thumbnail && file_exists(public_path() . 'gambar-produk/' . $newProduct->thumbnail)) {
                    File::delete(public_path() . 'gambar-produk/' . $newProduct->thumbnail);
                }
                $thumbnail = $request->file('thumbnail');
                $thumbnail_name = Str::slug($request->get('nama_produk'), '-') . '-' . $thumbnail->getClientOriginalName();
                $thumbnail->move('gambar-produk', $thumbnail_name);
                $newProduct->thumbnail = $thumbnail_name;
            } else {
                $newProduct->thumbnail = $newProduct->thumbnail;
            }
            $newProduct->save();

            DB::commit();
            Alert::success('Selamat', 'Data berhasil disimpan');

            return redirect()->back()->with(['status' => 'Produk Berhasil Disimpan!']);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
            return redirect()->back()->withStatus('Produk Gagal disimpan')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with(['status' => 'Data produk berhasil dihapus']);
    }

    public function uploadImage(Request $request)
    {
        $gambar = $request->file('file');
        $gambar_name = date('dmyhs-') . $gambar->getClientOriginalName();
        $gambar->move(public_path('uploads'), $gambar_name);
        return response()->json(['location' => asset('uploads') . '/' . $gambar_name]);
    }
}
