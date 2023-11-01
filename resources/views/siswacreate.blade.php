<title>Project</title>
<div class="container">
<form method="POST" action="{{ route('siswa.store') }}">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <label for="nis">NIS:</label>
    <input type="text" name="nis" required>

    <label for="jk">Jenis Kelamin:</label>
    <input type="text" name="jk" required>

    <label for="no_tlp">No. Telepon:</label>
    <input type="text" name="no_tlp" required>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required></textarea>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>

    <label></label>
    <button type="submit" onclick="return confirm('Are you sure?')">Simpan</button>  
    <a href="{{ route('siswa') }}">Kembali ke Halaman Utama</a>
</form>
</div>
<style>
    /* Tambah Siswa Baru */
h1 {
    font-size: 24px;
    color: #333;
}

form {
    margin: 20px 0;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
textarea,
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
}

a:hover {
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