<h1>Products List</h1>

@foreach ($products as $product)
    <p>{{ $product->name }} - {{ $product->price }}</p>
@endforeach