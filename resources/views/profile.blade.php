<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff5f8;
        }

        .profile {
            width: 350px;
            margin: 50px auto;
            text-align: center;
        }

        .foto {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #f58aae;
            margin-bottom: 25px;
        }

        .data {
            background-color: #f8c6d8;
            margin-bottom: 15px;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 18px;
            text-align: left;
        }

        .label {
            display: inline-block;
            width: 65px;
            font-weight: bold;
            color: #d94f7b;
        }

        .isi {
            color: #333;
        }
    </style>
</head>

<body>

    <div class="profile">

        <img src="{{ asset('images/profile.jpg') }}" class="foto">

        <div class="data">
            <span class="label">Nama</span>
            : <span class="isi">{{ $nama }}</span>
        </div>

        <div class="data">
            <span class="label">Kelas</span>
            : <span class="isi">{{ $kelas }}</span>
        </div>

        <div class="data">
            <span class="label">NPM</span>
            : <span class="isi">{{ $npm }}</span>
        </div>

    </div>

</body>
</html>