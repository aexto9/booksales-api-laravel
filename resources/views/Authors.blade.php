<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors</title>
</head>
<body>
    <h1>Daftar Penulis</h1>

    @foreach ($authors as $author)
        <h3>{{ $author->name }}</h3>
        <ul>
            @foreach ($author->books as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
