<!DOCTYPE html>
<html>
<head>
    <title>Biodata Form</title>
    <style>
        /* public/css/style.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .card {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-header {
            text-align: center;
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .card-body {
            padding: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        button[type="submit"], button[type="reset"] {
            width: 48%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        button[type="submit"] {
            background-color: #007bff;
            margin-right: 4%;
        }

        button[type="reset"] {
            background-color: #dc3545;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">Input Biodata</div>
        <div class="card-body">
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST">
                @csrf
                <label for="nik">NIK:</label>
                <input type="text" name="nik" required style="width: 380px;">

                <label for="nama">Nama:</label>
                <input type="text" name="nama" required style="width: 380px;">

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" required style="width: 380px;">

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" required style="width: 380px;">

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin" required style="width: 380px;">

                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" required style="width: 380px;">

                <label for="agama">Agama:</label>
                <select name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>

                <div class="form-buttons">
                    <button type="submit" id=btnSave>Send</button>
                    <button type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>

<!-- Script JQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btnSave').click(function() {
            alert('Selamat Mengikuti Uji Kompetensi Pada Skema Junior Web Programmer');
        });
    });
</script>

</html>
