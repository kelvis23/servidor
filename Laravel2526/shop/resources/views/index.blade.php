<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include('components.header')

    <h2>Orders</h2>
    <div class="container">
        <div class="row">

            @foreach ($orders as $order)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Order</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $order->date }}</h6>
                        <p class="card-text">Producto: {{ $order->product->name }}.<br>
                            @if($order->product->size) Size: {{ $order->product->size }}.<br> @endif
                            Price: {{ $order->product->price }}.<br>
                            @if($order->product->description) Description: {{ $order->product->description }}<br>@endif
                        </p>
                        <div class="card-footer text-muted">
                            Cliente: {{ $order->client->name }} {{ $order->client->surname }}
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <h2>Clients</h2>

    <div class="container">
        <div class="row">
            @foreach ($clients as $client)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $client->name }} {{ $client->surname }}</h5>
                        @if($client->address)
                        <p class="card-text"> {{ $client->address }} </p>@endif
                        <form method="post" action="{{ route('client.destroy', $client->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete client">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>