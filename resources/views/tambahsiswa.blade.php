<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
</head>
<body>
<form action= "/simpan" method="post">
@csrf
<label>Nama Lengkap</label>
<input type="text" name="nama" placeholder="masukana nama anda"><br>
<label>Jenis Kelamin</label>
<input type="text" name="jenis_kelamin" placeholder="masukana jenis kelamin anda"><br>
<label>Alamat</label>
<input type="text" name="alamat" placeholder="masukana alamat anda"><br>
<label>Agama</label>
<input type="text" name="agama" placeholder="masukana agama anda"><br>
<input type="submit" value="simpan">
</form>

<table border="2">
    <br>
    <a href="/">Home</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tampil as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->agama }}</td>
            <td><a href="{{URL::to('/tambahdetail/'.$data->id)}}">Tambah Detail</a></td>
            </tr>
    </tbody>
        @endforeach
</table>
</body>
</html>