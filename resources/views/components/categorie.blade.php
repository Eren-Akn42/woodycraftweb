<div class="categorie">
    <h2>{{ $categorie->name }}</h2>
    <p>{{ $categorie->description }}</p>
    <img src="img/{{ $categorie->image }}" alt="{{ $categorie->name }}">
    <a href="/categories/{{ $categorie->id }}">Voir la catégorie</a>
</div>
