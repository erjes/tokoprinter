
@extends('layout.template')
@section('konten')
<div class="card-view">
    @foreach ($datatransaksi as $transaksi)
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Transaksi #{{ $transaksi->id_transaksi }}</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">ID Transaksi: {{ $transaksi->id_transaksi }}</li>
                <li class="list-group-item">Tanggal: ${{ $transaksi->subtotal }}</li>
                <li class="list-group-item">Jumlah on: {{ $ordtransaksier->jumlah }}</li>
                <li class="list-group-item">Subtotal {{ $transaksi->subtotal }}</li>
                <li class="list-group-item">Status Transaksi {{ $transaksi->status_transaksi }}</li>
                <li class="list-group-item">ID Printer {{ $transaksi->id_printer }}</li>
                <li class="list-group-item">ID Customer {{ $transaksi->id_customer }}</li>
            </ul>
        </div>
    </div>
@endforeach
</div>
@endsection
