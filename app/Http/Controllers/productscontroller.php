<?php

namespace App\Http\Controllers;

use App\Models\printer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class productscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = printer::all();

        return view('customer.index', compact('products'));
    }
    public function show(printer $product)
    {
        return view('products.show', compact('product'));
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
     * @param  \App\Models\printer  $printer
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(printer $printer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, printer $printer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(printer $printer)
    {
        //
    }
}
