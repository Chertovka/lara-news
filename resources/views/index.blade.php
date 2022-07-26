<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>
    <link rel="stylesheet" href="/styles/main.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<div class="container">
    <div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">
        <div class="row bg-white shadow-sm">
            <div class="col border rounded p-4">
                <div class="text-center">
                    <h3>Главная страница!</h3>
                </div>
                <br>
                <div class="text-center">
                    <a class="btn btn-primary" href="/newses/" role="button">Список новостей</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
