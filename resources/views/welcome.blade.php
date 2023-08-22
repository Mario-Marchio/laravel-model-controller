<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    @foreach ($movies as $movie)
        <div class="card">
            <div class="card-body">
                {{ $movie->title }}
            </div>
        </div>
    @endforeach
</body>

</html>
