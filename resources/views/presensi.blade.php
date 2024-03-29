@extends('main')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Absensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        select,
        button {
            margin-bottom: 15px;
            padding: 5px;
            font-size: 16px;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Formulir Absensi</h2>
        <form id="absensiForm">
            <label for="nama">Nama:</label>
            <select id="nama" name="nama">
                <option value="John Doe">Agung</option>
                <option value="Jane Smith">Imam Sahroni Darmawan</option>
                <option value="Michael Johnson">Syaiful Madani</option>
                <!-- Tambahkan 5 orang lagi sesuai kebutuhan -->
            </select>

            <label for="absen">Absen:</label>
            <select id="absen" name="absen">
                <option value="Datang">Datang</option>
                <option value="Pulang">Pulang</option>
            </select>

            <label for="jam">Jam:</label>
            <input type="text" id="jam" name="jam" readonly>

            <label for="tanggal">Tanggal:</label>
            <input type="text" id="tanggal" name="tanggal" readonly>

            <label for="bulan">Bulan:</label>
            <input type="text" id="bulan" name="bulan" readonly>

            <label for="tahun">Tahun:</label>
            <input type="text" id="tahun" name="tahun" readonly>

            <label for="statusAbsensi">Status Absensi:</label>
            <select id="statusAbsensi" name="statusAbsensi">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
                <option value="Dinas Luar">Dinas Luar</option>
            </select>

            <label for="fotoSelfi">Foto Selfi:</label>
            <input type="file" accept="image/*" capture="user" id="fotoSelfi" name="fotoSelfi">

            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" readonly>

            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
@endsection