<!DOCTYPE html>
<html>

<head>
    <title>CRUD OPS</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/doodle/48/code-file.png">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
            padding: 30px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0.8;
            }

            to {
                opacity: 1;
            }
        }

        table {
            border-collapse: separate;
            width: 2%;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }

        tr:hover {
            background-color: #78ade2;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
