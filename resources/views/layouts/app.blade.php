<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Griya Kinasih</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f7f6;
            color: #333;
        }

        nav {
            background-color: #2f5d50;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 84%;
            max-width: 1100px;
            margin: auto;
        }

        footer {
            margin-top: 60px;
            background-color: #2f5d50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #d8a756;
            color: white;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    <footer>
        <p>&copy; 2026 Kos Griya Kinasih. All Rights Reserved.</p>
    </footer>

</body>
</html>