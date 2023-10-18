
    @extends('layout.template')
    @section('konten')
    <style>
        .h1-white {
        color: black;
        }
        @media screen and (min-width: 768px) {
            .card {
        border: 1px solid black;
        border-radius: 10px;
        font-family: sans-serif;
        color: black;
        }

        .card-title {
        font-size: 20px;
        }

        .card-text {
        font-size: 16px;
        }

        .body {
        margin: 0;
        padding: 0;
        height: 100vh;
        }
}
    </style>
    <ul>
        <h1 class="h1 h1-white">Printer</h1>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('uploads/'.$product->image_name)}}" alt="{{ $product->nama_printer }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama_printer }}</h5>
                            <span class="currency-symbol">{{ 'Rp.'.$product->harga.',-' }}</span>
                            <p class="card-text">{{ $product->spesifikasi }}</p>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Masukan ke Keranjang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </ul>
    @endsection


    <script>
        function formatRupiahCurrency(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        });
        return formatter.format(amount);
    }

    // Example usage:
        const amount = 1234567.89; // Replace with your variable
        const formattedAmount = formatRupiahCurrency(amount);
        document.getElementById('formatIDR').textContent = formattedAmount;

    </script>
