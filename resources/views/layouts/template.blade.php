<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fff7fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            background-color: #ff5b8f;
            padding: 18px 0;
        }

        .navbar-container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .judul {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 10px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 9px 15px;
            border-radius: 7px;
            font-size: 14px;
        }

        .menu a:hover {
            background-color: white;
            color: #ff5b8f;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
            flex: 1;
        }

        /* Page Title */
        .page-title {
            margin-bottom: 20px;
        }

        .page-title h2 {
            color: #ff5b8f;
            font-size: 22px;
        }

        /* Table */
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #ff5b8f;
            color: white;
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        tr:hover {
            background-color: #fff0f5;
        }

        /* Form */
        .form-container {
            background-color: white;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        }

        .form-container h2 {
            color: #ff5b8f;
            margin-bottom: 25px;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        /* Button */
        .btn {
            display: inline-block;
            width: 120px;
            text-align: center;
            background-color: #ff5b8f;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #e94c7d;
        }

        /* Action Button */
        .action-buttons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .btn-edit {
            background-color: #ffd6e4;
            color: #c94f78;
            padding: 7px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-delete {
            background-color: #ff5b8f;
            color: white;
            padding: 7px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-edit:hover {
            background-color: #ffc4d8;
        }

        .btn-delete:hover {
            background-color: #e94c7d;
        }

        /* Alert */
        .alert-success,
        .alert-error {
            width: 450px;
            margin: 0 auto 25px auto;
            padding: 15px 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 14px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.06);
        }

        .alert-success {
            background-color: #d9f2df;
            color: #3f7d4c;
            border: 1px solid #bce3c5;
        }

        .alert-error {
            background-color: #f8d5dc;
            color: #b94f63;
            border: 1px solid #efb7c1;
        }

        /* Footer */
        .footer {
            background-color: #ffd1df;
            text-align: center;
            padding: 15px;
            color: #555;
        }

        .footer p {
            margin: 4px;
            font-size: 14px;
        }

        /* Form Action */
        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-save,
        .btn-cancel {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }

        .btn-save {
            background-color: #ff5b8f;
            color: white;
        }

        .btn-save:hover {
            background-color: #e94c7d;
        }

        .btn-cancel {
            background-color: #ffd6e4;
            color: #c94f78;
        }

        .btn-cancel:hover {
            background-color: #ffc4d8;
        }
    </style>
</head>

<body>

    <x-navbar />

    @yield('content')

    <x-footer />

</body>

</html>