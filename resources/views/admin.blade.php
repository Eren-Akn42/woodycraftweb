@extends('layouts.app')

@section('title')
    Admin - Woodycraftweb
@endsection

@section('content')
    <h1>Bienvenue sur la page admin</h1>
    <table>
        <thead>
            <tr>
                <th>ID Commande</th>
                <th>Client</th>
                <th>Date</th>
                <th>Articles</th>
                <th>Total</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer->forename ?? 'Non spécifié' }} {{ $order->customer->surname ?? '' }}</td>
                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    <td>
                        @foreach ($order->orderItems as $item)
                            {{ $item->product->name ?? 'Produit non trouvé' }} (x{{ $item->quantity }})<br>
                        @endforeach
                    </td>
                    <td>{{ number_format($order->total, 2) }}€</td>
                    <td>{{ $order->status == 0 ? 'En attente' : 'Validée' }}</td>
                    <td>
                        @if ($order->status == 0)
                            <form action="{{ route('admin.validateOrder', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit">Valider</button>
                            </form>
                        @else
                            Validée
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
