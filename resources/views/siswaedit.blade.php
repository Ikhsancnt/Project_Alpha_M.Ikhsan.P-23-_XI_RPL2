<title>Project</title>
<div class="container">
<form method="POST" action="{{ route('siswa.update', $siswa) }}">
    @csrf
    @method('PUT')
    <label for="nama">Nama:</label>
    <input readonly type="text" name="nama" value="{{ $siswa->nama }}" required>

    <label for="nis">NIS:</label>
    <input readonly type="text" name="nis" value="{{ $siswa->nis }}" required>

    <label for="jk">Jenis Kelamin:</label>
    <input type="text" name="jk" value="{{ $siswa->jk }}" required>

    <label for="no_tlp">No. Telepon:</label>
    <input type="text" name="no_tlp" value="{{ $siswa->no_tlp }}" required>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required>{{ $siswa->alamat }}</textarea>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>

    <button type="submit" onclick="return confirm('are you sure ?')">Simpan Perubahan</button>
</form>

<a href="{{ route('siswa') }}">Kembali ke Daftar Siswa</a>

<style>
    .edit-siswa-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

form label {
    display: block;
    margin-top: 10px;
}

form input[type="text"],
form textarea,
form input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

.back-link {
    display: block;
    margin-top: 20px;
    text-decoration: none;
    color: #007bff;
}

.back-link:hover {
    text-decoration: underline;
}

.container {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin: 20px; 
}

</style>