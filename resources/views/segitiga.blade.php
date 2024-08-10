<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
    <style>
        /* Style body and card */
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between; /* Membuat jarak antara kedua tombol */
            align-items: center;
        }

        button[type="submit"], button[type="reset"] {
            width: 48%; /* Setel lebar tombol agar tidak terlalu lebar */
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            text-align: center; /* Pastikan teks di tengah */
        }

        button[type="submit"] {
            background-color: #007bff;
        }

        button[type="reset"] {
            background-color: #dc3545;
        }

        button:hover {
            opacity: 0.9;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">Hitung Luas Segitiga</div>
        <div class="card-body">
            @if($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form>
                @csrf
                <label for="alas">Alas:</label>
                <input type="text" name="alas" required style="width: 380px;">

                <label for="tinggi">Tinggi:</label>
                <input type="text" name="tinggi" required style="width: 380px;">

                <label for="tinggi">Hasil:</label>
                <input type="text" name="hasil" id="hasil" readonly style="width: 380px;">

                <div class="form-buttons">
                    <button type="submit">Hitung</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- Script JQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('button[type="submit"]').click(function(e) {
            e.preventDefault();

            var alas = $('input[name="alas"]').val();
            var tinggi = $('input[name="tinggi"]').val();
            var hasil = 0.5 * alas * tinggi;

            $('input[name="hasil"]').val(hasil);
        });
    });
</script>
</html>
