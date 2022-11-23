<table class="table">
    <thead class="bg-info text-white">
        <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Tanggal</th>
            <th scope="col">Witel</th>
            <th scope="col">Divisi</th>
            <th scope="col">Nama Hero/AM</th>
            <th scope="col">No Telp</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Jenis Produk</th>
            <th scope="col">Deskripsi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($data as $i)
            <tr>
                {{-- <th scope="row">{{ $i++ }}</th> --}}
                <td>{{ $i->tanggal }}</td>
                <td>{{ $i->witel }}</td>
                <td>{{ $i->divisi }}</td>
                <td>{{ $i->nama_hero }}</td>
                <td>{{ $i->no_telp }}</td>
                <td>{{ $i->nama_pelanggan }}</td>
                <td>{{ $i->jenis_produk }}</td>
                <td>{{ $i->deskripsi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
