<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    @include("controler.header")
    <div class="container mt-5">

        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title mb-4">Create New event</h1>

                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input name="title" type="text" id="title" placeholder="Enter title" value = "{{old('title')  }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea name="description" type="text" class="form-control" id="description" 
                            placeholder="Enter description" value = "{{old('description') }}">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="duration">Durasion</label>
                        <input name="duration" type="number" class="form-control" id="duration" placeholder="durasion" value = "{{old('duration')  }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="visibility">vista</label>
                        <input name="visibility" type="checkbox" id="publica" >
                        <label for ="publica">publica</label>
                        <input name="visibility" type="checkbox" id="privada" >
                        <label for ="privada">privada</label>
                    </div>

                    <!-- Client Selection -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User:</label>
                        <select name="user_id" id="user_id" class="form-select" required>
                            <option value="" disabled selected>Select a client</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Order</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>