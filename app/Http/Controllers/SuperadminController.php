<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('superadmin.index', [
            'title' => "Admin Home",
            'products' => Product::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('superadmin.create', [
            'title' => "Create Page",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'image' => 'required|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Product::create($validatedData);

        return redirect('/produk')->with('success', 'Berhasil Menambahkan Produk');
    }

    public function edit(string $id)
    {
        return view('superadmin.edit', [
            'title' => 'Edit Produk',
            'product' => Product::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'image' => 'file'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
                $validatedData['image'] = $request->file('image')->store('post-images');
            }
        }

        Product::where('id', $id)->update($validatedData);
        return redirect('/produk')->with('success', 'Berhasil Update Produk');
    }

    public function destroy(string $id)
    {
        // Cari produk berdasarkan ID
        $product = Product::find($id);

        // Hapus produk dari database
        if ($product) {
            // Hapus gambar dari penyimpanan jika ada
            if ($product->image) {
                Storage::delete($product->image);
            }

            // Hapus produk dari database
            $product->delete();

            return redirect('/produk')->with('success', 'Produk Telah Dihapus');
        } else {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan');
        }
    }
}
