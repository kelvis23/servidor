<div>
    <h1>Search products</h1>
    <!-- Formulario de búsqueda -->
    <!-- ordenar por minimo y maximo co un boton orde los productos  de menor a mayor o visebersa  -->
    <form method="GET" action="{{ route('product.search') }}">

        <button type="submit" name="sort" value="min" class="btn btn-primary">Ordenar por mínimo</button>
        <button type="submit" name="sort" value="max" class="btn btn-primary">Ordenar por máximo</button>


        <!-- Mostrar resultados de búsqueda -->
        @if(isset($products))
            <h2>Search Results:</h2>
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <h5>{{ $product->name }}</h5>
                        <p>Price: {{ $product->price }}</p>
                        @if($product->description)
                            <p>Description: {{ $product->description }}</p>
                        @endif
                        @if($product->size)
                            <p>Size: {{ $product->size }}</p>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </form>

</div>