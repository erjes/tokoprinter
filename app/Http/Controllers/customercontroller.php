<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\printer;
use App\Models\transaksi;
use App\Models\user;
use Illuminate\Http\Request;

class customercontroller extends Controller
{
    public function index(){
        return view('customer.login');
    }

    public function regindex(){
        return view('customer.register');
    }

    public function login(Request $request){
        $email   = $request->email;
        $password = $request->password;

        $user = user::where('email', $email)->where('password', $password)->first();

        if ($user) {
            return redirect('/products');
        }
        else {
            // return response()->json(['message' => 'Username atau Password Salah'], 401);
            return redirect()->back()->withErrors([
             'Email atau Password Salah',
            ]);
        }
    }
    public function register(Request $request){
        $request->validate([
            'nama_lengkap'  => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $dataregister = [
            'nama_lengkap'  => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'customer',
        ];



        user::create($dataregister);

        return redirect('login')->with('success','Berhasil Register');
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
