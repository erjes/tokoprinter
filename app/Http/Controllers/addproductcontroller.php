<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\printer;
use App\Models\transaksi;
use Illuminate\Http\Request;

class addproductcontroller extends Controller
{

    // public function getSuplier($KodeSuplier)
    // {
    //     $suplierdet = Suplier::find($KodeSuplier);

    //     if ($suplierdet) {
    //         return response()->json([
    //             'NamaSuplier' => $suplierdet->NamaSuplier,
    //             'AlamatSuplier' => $suplierdet->AlamatSuplier,
    //             'KontakSuplier' => $suplierdet->KontakSuplier,
    //             // Add more fields as needed
    //         ]);
    //     }

    //     return response()->json(['error' => 'Supplier not found'], 404);
    // }


    // public function getBarang($KodeBarang)
    // {
    //     $barangdet = Barang::find($KodeBarang);

    //     if ($barangdet) {
    //         return response()->json([
    //             'NamaBarang' => $barangdet->NamaBarang,
    //             'HargaBarang' => $barangdet->HargaBarang,
    //             // Add more fields as needed
    //         ]);
    //     }

    //     return response()->json(['error' => 'Barang not found'], 404);
    // }

    // public function create()
    // {
    //     return view('transaksi.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'KodePembelian'  => 'required',
    //         'KodeBarang' => 'required',
    //         'Jumlah' => 'required',
    //         'TotalHarga' => 'required',
    //         'KodeSuplier' => 'required',
    //     ]);

    //     // Absen::create($request->all());

    //     $datapembelian = [
    //         'KodePembelian'  => $request->KodePembelian,
    //         'KodeBarang' => $request->KodeBarang,
    //         'Jumlah' => $request->Jumlah,
    //         'TotalHarga' => $request->TotalHarga,
    //     ];

    //     $datasuplier = [
    //         'KodePembelian'  => $request->KodePembelian,
    //         'KodeSuplier' => $request->KodeSuplier,
    //     ];
    //     Pembelian::create($datasuplier);
    //     DetilPembelian::create($datapembelian);

    //     return redirect()->route('transaksi.index')->with('success','Data telah diinput');
    // }
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
