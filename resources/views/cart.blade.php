@extends('layouts.app')

@section('title')
    Panier - Woodycraftweb
@endsection

@section('content')
    <h1>Panier</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['price'] }} €</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['price'] * $details['quantity'] }} €</td>
                        <td>
                            <!-- Bouton pour supprimer un produit du panier -->
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="#">Passer à la caisse</a>
        </div>
    @else
        <p>Votre panier est vide.</p>
    @endif

@endsection
