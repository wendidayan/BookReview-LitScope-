<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Details</title>
</head>
<body>
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Rating:</strong> {{ $book->rating }} / 5</p>
        <p><strong>Genres:</strong> {{ $book->genres }}</p>
        <p><strong>Published:</strong> {{ $book->published }}</p>
        <p><strong>Format:</strong> {{ $book->format }}</p>
        <p><strong>Language:</strong> {{ $book->language }}</p>
        <p><strong>About the Book:</strong> {{ $book->about }}</p>
        <p><strong>Review:</strong> {{ $book->review }}</p>
        <p><strong>About the Author:</strong> {{ $book->about_author }}</p>

        <a href="{{ route('bookView.create') }}">Back to all books</a>
    </div>
</body>
</html>
