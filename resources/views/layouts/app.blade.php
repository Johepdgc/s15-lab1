<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            padding: 20px 40px;
        }

        nav a {
            margin-right: 20px;
            color: #333;
            text-decoration: none;
        }

        main {
            padding: 40px;
        }

        footer {
            background-color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('users.index') }}">Usuarios</a>

        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024</p>
    </footer>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</body>

</html>