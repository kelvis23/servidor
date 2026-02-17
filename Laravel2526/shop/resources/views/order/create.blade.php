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
    

<div class="container mt-5">
    @include('components.header')

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-4">Create New Order</h1>

            <form action="{{ route('order.store') }}" method="POST">
                @csrf

                <!-- Client Selection -->
                <div class="mb-3">
                    <label for="client_id" class="form-label">Client:</label>
                    <select name="client_id" id="client_id" class="form-select" required>
                        <option value="" disabled selected>Select a client</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Product Selection -->
                <div class="mb-3">
                    <label for="product_id" class="form-label">Product:</label>
                    <select name="product_id" id="product_id" class="form-select" required>
                        <option value="" disabled selected>Select a product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
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