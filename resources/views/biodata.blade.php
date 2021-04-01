<!DOCTYPE html>
<html>
<head>
	<title>Biodata Siswa</title>
</head>
<body>
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
            <th>Kelas & Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($join as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->kelas }} - {{ $data->jurusan }}</td>
            </tr>
    </tbody>
        @endforeach
</table>
</body>
</html>