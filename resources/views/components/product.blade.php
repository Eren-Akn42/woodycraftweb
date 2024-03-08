<div class="product">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <img src="img/{{ $product->image }}" alt="{{ $product->name }}">
    <p>{{ number_format($product->price, 2) }}€</p>
    <a href="#">Ajouter au panier</a>
</div>
