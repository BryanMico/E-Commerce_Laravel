<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 1rem;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            background-color: #fff;
            padding: 2rem;
            margin-top: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            margin-left: 1rem; /* Added margin to the left */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="navbar-brand">Ecommerce</div>
            <nav>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/profile">Profile</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
