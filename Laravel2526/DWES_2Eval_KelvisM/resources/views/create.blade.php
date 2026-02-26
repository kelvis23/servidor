<h1>Create Author</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name">

    <br>

    <label>Email:</label>
    <input type="email" name="email">

    <br>

    <label>Age:</label>
    <input type="number" name="age">

    <br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('authors.index') }}">Back</a>