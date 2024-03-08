<div class="product">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->image }}</p>
    <p>Prix : {{ number_format($product->price, 2) }}€</p>
</div>
