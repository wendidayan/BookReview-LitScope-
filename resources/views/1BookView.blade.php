<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <div class="container">
        <h2>Books Added</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add Book Form -->
        <h3>Add a New Book</h3>
        <form action="{{ route('bookView.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" required>
            </div>
            <div>
                <label for="rating">Rating (1-5):</label>
                <input type="number" name="rating" id="rating" min="1" max="5" required>
            </div>
            <div>
                <label for="genres">Genres:</label>
                <input type="text" name="genres" id="genres" required>
            </div>
            <div>
                <label for="published">Published Date:</label>
                <input type="date" name="published" id="published" required>
            </div>
            <div>
                <label for="format">Format:</label>
                <input type="text" name="format" id="format" required>
            </div>
            <div>
                <label for="language">Language:</label>
                <input type="text" name="language" id="language" required>
            </div>
            <div>
                <label for="about">About the Book:</label>
                <textarea name="about" id="about" required></textarea>
            </div>
            <div>
                <label for="review">Review:</label>
                <textarea name="review" id="review" required></textarea>
            </div>
            <div>
                <label for="about_author">About the Author:</label>
                <textarea name="about_author" id="about_author" required></textarea>
            </div>
            <button type="submit">Add Book</button>
        </form>

        <hr>

        <!-- Display Books List -->
        <h3>All Books</h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Rating</th>
                    <th>Genres</th>
                    <th>Published</th>
                    <th>Format</th>
                    <th>Language</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>
                            <a href="{{ route('bookView.show', $book->id) }}">
                                {{ $book->title }}
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->rating }}</td>
                        <td>{{ $book->genres }}</td>
                        <td>{{ $book->published }}</td>
                        <td>{{ $book->format }}</td>
                        <td>{{ $book->language }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
