
       <!-- START FORM -->

        <!-- AKHIR FORM -->
        @extends('layout.template')
        @section('konten')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="" method="get">
                  <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Cari</button>
              </form>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href='{{ url('absen/create') }}' class="btn btn-primary">+ Tambah Data</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-1">Nama</th>
                        <th class="col-md-3">Kelas</th>
                        <th class="col-md-4">Materi</th>
                        <th class="col-md-2">Mapel</th>
                        <th class="col-md-2">Waktu</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    <?php $i = $dataabsen->firstItem() ?>
                    @foreach ($dataabsen as $item)
                    <tr>
                        <td>{{$item->ID}}</td>
                        <td>{{$item->Nama}}</td>
                        <td>{{$item->Kelas}}</td>
                        <td>{{$item->Materi}}</td>
                        <td>{{$item->Mapel}}</td>
                        <td>{{$item->Waktu}}</td>
                        <td>
                            <a href='{{ url('absen/'.$item->ID.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('absen/'.$item->ID) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody> --}}
            {{-- </table>
            {{ $dataabsen->withQueryString()->links() }} --}}
      </div>
    @endsection


