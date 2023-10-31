<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\printer;
use App\Models\transaksi;
use Illuminate\Http\Request;

class addproductcontroller extends Controller
{
    public function index()
    {
        $printer = printer::all();
        $customer = customer::all();
        $transaksi = transaksi::all();
        return view('admin.addproduct', ['printer' => $printer],  ['customer' => $customer], ['transaksi' => $transaksi]);
    }



    public function create()
    {
        return view('admin.addproduct');
    }

    public function postprinter(Request $request)

    {
        // Validasi permintaan untuk memastikan itu adalah file gambar yang sah
        $request->validate([
            'id_printer'  => 'required',
            'nama_printer' => 'required',
            'spesifikasi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan aturan validasi sesuai kebutuhan Anda
        ]);

        $gambar = $request->file('gambar');

        // Generate nama unik untuk gambar (misalnya, menggunakan timestamp)
        $nama_gambar = time() . '_' . $request->id_printer . '.' . $gambar->getClientOriginalExtension();

        $dataprinter = [
            'id_printer'  => $request->id_printer,
            'nama_printer' => $request->nama_printer,
            'spesifikasi' => $request->spesifikasi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image_name' => $nama_gambar
        ];


        printer::create($dataprinter);


        // Simpan gambar ke direktori yang ditentukan (contoh: public/uploads)
        $gambar->move(public_path('uploads'), $nama_gambar);

        // return response()->json(['message' => 'Gambar Berhasil Di Upload'], 201);
        return redirect()->route('admin.addproduct')->with('success','Data telah diinput');
    }
}
