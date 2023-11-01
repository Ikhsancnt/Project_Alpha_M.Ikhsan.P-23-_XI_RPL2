@extends('layout') <!-- Gunakan layout.blade.php sebagai layout dasar -->

@section('content')
<div class="header">
    <h1>Daftar Siswa</h1>
</div>
<table class="table">
    <tr>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">NIS</th>
        <th style="text-align: center;">Jenis Kelamin</th>
        <th style="text-align: center;">No. Telepon</th>
        <th style="text-align: center;">Alamat</th>
        <th style="text-align: center;">Tanggal Lahir</th>
        <th style="text-align: center;" colspan="3">Aksi</th>
    </tr>
    <tbody>
        @foreach($siswa as $item)
        <tr>
            <td style="text-align: center;">{{ $item->nama }}</td>
            <td style="text-align: center;">{{ $item->nis }}</td>
            <td style="text-align: center;">{{ $item->jk }}</td>
            <td style="text-align: center;">{{ $item->no_tlp }}</td>
            <td style="text-align: center;">{{ $item->alamat }}</td>
            <td style="text-align: center;">{{ $item->tanggal_lahir }}</td>
            <td style="text-align: center;">
                <a href="{{ route('siswadetail', $item) }}" class="btn btn-info">Lihat</a>
            </td>
            <td style="text-align: center;">
                <a href="{{ route('siswaedit', $item) }}" class="btn btn-warning">Edit</a>
            </td>
            <td style="text-align: center;">
                <form action="{{ route('siswa.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection