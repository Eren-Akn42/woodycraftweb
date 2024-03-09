<div class="product">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
    <p>{{ number_format($product->price, 2) }}€</p>
    <a href="{{ route('product.quantity', $product->id) }}">Choisir la quantité</a>
</div>
