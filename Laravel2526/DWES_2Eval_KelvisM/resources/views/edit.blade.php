<h1>Edit Author</h1>

<form action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $author->name }}">

    <br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $author->email }}">

    <br>

    <label>Age:</label>
    <input type="number" name="age" value="{{ $author->age }}">

    <br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('authors.index') }}">Back</a>