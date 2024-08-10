<!-- resources/views/mahasiswa/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <style>
        /* public/css/style.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            padding: 10px;
            display: inline-block;
            margin-bottom: 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
        }

        a:hover {
            background-color: #007bff;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #0056b3;
        }

        form button[type="submit"] {
            background-color: red;
            margin-right: 10px;
        }

        form button[type="reset"] {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $m)
            <tr>
                <td>{{ $m['npm'] }}</td>
                <td>{{ $m['nama'] }}</td>
                <td>{{ $m['tempat_lahir'] }}</td>
                <td>{{ $m['tanggal_lahir'] }}</td>
                <td>{{ $m['prodi'] }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $m['npm']) }}">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $m['npm']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>