<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\printer;
use App\Models\transaksi;
use Illuminate\Http\Request;

class customercontroller extends Controller
{
    public function index(){
        $printer = printer::all();
        $transaksi = transaksi::all();
        return view('customer.index', ['suplier' => $printer],  ['transaksi' => $transaksi]);
    }

    public function postcustomer(Request $request){
        $request->validate([
            'id_customer'  => 'required',
            'nama_customer' => 'required',
            'alamat_customer' => 'required',
            'kontak_customer' => 'required',
            'id_user' => 'required',
        ]);

        $datapembelian = [
            'id_customer'  => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'alamat_customer' => $request->alamat_customer,
            'kontak_customer' => $request->kontak_customer,
            'id_user' => $request->id_user,
        ];

        customer::create($datapembelian);

        // return response()->json(['message' => 'Gambar Berhasil Di Upload'], 201);
        return redirect()->route('customer.index')->with('success','Data telah diinput');
    }

    public function postransaksi(Request $request){
        $request->validate([
            'id_transaksi'  => 'required',
            'tanggal' => 'required',
            'quantity' => 'required',
            'subtotal' => 'required',
            'id_user' => 'required',
            'id_printer' => 'required',
            'id_customer' => 'required',
        ]);

        $datapembelian = [
            'id_transaksi' => $request->id_transaksi,
            'tanggal' => $request->tanggal,
            'quantity' => $request->quantity,
            'subtotal' => $request->subtotal,
            'id_user' => $request->id_user,
            'id_printer' => $request->id_user,
            'id_customer' => $request->id_user,
        ];

        transaksi::create($datapembelian);

        // return response()->json(['message' => 'Gambar Berhasil Di Upload'], 201);
        return redirect()->route('customer.index')->with('success','Data telah diinput');
    }
}
