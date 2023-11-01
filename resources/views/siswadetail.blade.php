<title>Project</title>
<div class="container">
<h1 style="text-align: center;">Detail Siswa</h1><hr>

<p><strong>Nama:</strong> {{ $siswa->nama }}</p>
<p><strong>NIS:</strong> {{ $siswa->nis }}</p>
<p><strong>Jenis Kelamin:</strong> {{ $siswa->jk }}</p>
<p><strong>No. Telepon:</strong> {{ $siswa->no_tlp }}</p>
<p><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
<p><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</p>

<a href="{{ route('siswa') }}">Kembali ke Daftar Siswa</a>

<style>
h1 {
  font-size: 24px; 
  font-weight: bold; 
  margin-bottom: 20px;
}

p {
  font-size: 16px; 
  margin-bottom: 10px; 
}

strong {
  font-weight: bold; 
}

a {
  text-decoration: none;
  color: #007BFF; 
}

a:hover {
  text-decoration: underline;
  color: #0056b3; 
}

.container {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin: 20px; 
}
</style>