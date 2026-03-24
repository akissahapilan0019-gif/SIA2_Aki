<h1>Product List</h1>

@foreach($products as $product)
{{ $product->name }} - {{ $product->price }}

@endforeach