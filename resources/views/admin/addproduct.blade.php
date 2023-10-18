@extends('layout.template')


@section('konten')

    <div class="card">
        <div class="card-body">
            <form action="{{ url('addproduct') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="id_printer">Id Printer</label>
                    <input type="text" name="id_printer" class="form-control @error('id_printer') is-invalid @enderror"
                           id="id_printer"
                           placeholder="Buat Id Baru Printer" value="{{ old('id_printer') }}">
                    @error('id_printer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="nama_printer">Nama Printer</label>
                    <input type="text" name="nama_printer" class="form-control @error('nama_printer') is-invalid @enderror"
                           id="nama_printer"
                           placeholder="Masukan Nama Printer" value="{{ old('nama_printer') }}">
                    @error('nama_printer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="spesifikasi">Spesifikasi</label>
                    <input type="text" name="spesifikasi" class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi"
                           placeholder="Masukan Spesifikasi Printer" value="{{ old('spesifikasi') }}">
                    @error('spesifikasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga"
                           placeholder="Tentukan Harga Printer" value="{{ old('harga') }}">
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"
                           id="stok"
                           placeholder="Stok Printer" value="{{ old('stok') }}" step="1">
                    @error('stok')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="gambar">Gambar Printer</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
                    @error('gambar')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <br>

                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection

