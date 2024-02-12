<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Website</title>
    <style>
        .active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        @yield('navigatie')
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        
    </footer>
</body>
</html>
