<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Selamat Datang di toko BOOKSALES</p>

    @foreach ($books as $book)
        <ul>
            <li>{{ $book->title }}</li>
            <li>{{ $book->description }}</li>
            <li>Stok: {{ $book->stock }}</li>
            <li>Harga: Rp{{ number_format($book->price, 0, ',', '.') }}</li>
            <li>Penulis: {{ $book->author->name }}</li>
        </ul>
    @endforeach
</body>
</html>
