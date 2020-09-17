<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.pages.categories.index')->withCategories($categories);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_kategori' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $newCategory = new Category();
            $newCategory->nama_kategori = $request->get('nama_kategori');
            $newCategory->slug_kategori = Str::slug($request->get('nama_kategori', '-'));
            if ($request->hasFile('icon_kategori')) {
                $icon = $request->file('icon_kategori');
                $icon_name = date('d-m-y-') . Str::slug($request->get('nama_kategori'), '-') . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('icon-kategori') . $icon_name);
                $newCategory->icon = $icon_name;
            }
            $newCategory->diskripsi_kategori = $request->get('diskripsi_kategori');
            $newCategory->save();
            if ($newCategory) {
                return redirect()->back()->withStatus('Kategori berhasil disimpan');
            }
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('backend.pages.categories.edit')->withCategory($category)->withCategories($categories);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_kategori' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $newCategory = Category::find($id);
            $newCategory->nama_kategori = $request->get('nama_kategori');
            $newCategory->slug_kategori = Str::slug($request->get('nama_kategori', '-'));
            if ($request->hasFile('icon_kategori')) {
                if ($newCategory->icon && file_exists(public_path('icon-kategori') . $newCategory->icon)) {
                    File::delete(public_path('icon-kategori'), $newCategory->icon);
                }
                $icon = $request->file('icon_kategori');
                $icon_name = date('d-m-y-') . Str::slug($request->get('nama_kategori'), '-') . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('icon-kategori'), $icon_name);
                $newCategory->icon = $icon_name;
            } else {
                $newCategory->icon = $newCategory->icon;
            }
            $newCategory->diskripsi_kategori = $request->get('diskripsi_kategori');
            $newCategory->save();
            if ($newCategory) {
                return redirect()->back()->withStatus('Kategori berhasil disimpan');
            }
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with(['status' => 'Data produk berhasil dihapus']);
    }
}
