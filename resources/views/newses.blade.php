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
<div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">
    <div class="row bg-white shadow-sm">
        <div class="col border rounded p-4">
            <div class="text-center">
                <h3>Список новостей</h3>
            </div>
            <div class="bd-example-snippet bd-code-snippet">
                <div class="bd-example">
                    @if (count($newses) > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Заголовок</th>
                                <th scope="col">Описание</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newses as $news)
                                <tr>
                                    <td>{{$news->title.' '.$news->id}}</td>
                                    <td>{{$news->description.' '.$news->id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary " href="/" role="button">На главную</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
