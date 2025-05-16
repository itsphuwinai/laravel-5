<!DOCTYPE html>
<html>
<head>
    <title>BookSales-API</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:hover {
            background-color: #ffffff;
        }
        img.cover {
            width: 60px;
            height: 60px;
            border-radius: 4px;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

    <h1>Book Catalogs</h1>

    <table>
        <thead>
            <tr>
                <th>Cover</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Price ($)</th>
                <th>Stock</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>
                        @if ($book->cover_photo)
                            <img src="{{ asset('storage/' . $book->cover_photo) }}" alt="{{ $book->title }} cover" class="cover" />
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->genre->name }}</td>
                    <td>{{ number_format($book->price, 2) }}</td>
                    <td>{{ $book->stock }}</td>
                    <td style="max-width: 300px;">{{ \Illuminate\Support\Str::limit($book->description, 100) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
