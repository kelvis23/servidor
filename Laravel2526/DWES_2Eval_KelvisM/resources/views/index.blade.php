<h1>Authors List</h1>

<a href="{{ route('authors.create') }}">Create Author</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    @foreach($authors as $author)
    <tr>
        <td>{{ $author->name }}</td>
        <td>{{ $author->email }}</td>
        <td>{{ $author->age }}</td>
        <td>
            <a href="{{ route('authors.edit', $author->id) }}">Edit</a>

            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
