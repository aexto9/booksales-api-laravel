<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Selamat Datang di toko BOOKSALES</p>

    @foreach ($genres as $genre)
        <ul>
            <li>{{$genre['name']}}</li>
            <li>{{ $genre['description'] }}</li>
        </ul>
    @endforeach
</body>
</html>