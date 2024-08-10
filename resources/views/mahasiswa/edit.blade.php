<!-- resources/views/mahasiswa/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
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
            background-color: #28a745;
            margin-right: 10px;
        }

        form button[type="reset"] {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswaData['npm']) }}" method="POST">
        @csrf
        @method('PUT')
        <label>NPM:</label>
        <input type="text" name="npm" value="{{ $mahasiswaData['npm'] }}" required><br><br>

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswaData['nama'] }}" required><br><br>

        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" value="{{ $mahasiswaData['tempat_lahir'] }}" required><br><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="{{ $mahasiswaData['tanggal_lahir'] }}" required><br><br>

        <label>Prodi:</label>
        <input type="text" name="prodi" value="{{ $mahasiswaData['prodi'] }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
