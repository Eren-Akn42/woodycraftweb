<!DOCTYPE html>
<html>

<head>
    <title>Facture</title>
</head>

<body>
    <h1>Facture #{{ $order->id }} Woodycraft</h1>
    <p>Date: {{ $order->created_at->toDateString() }}</p>
    @if ($order->customer)
        <p><strong>Client:</strong> {{ $order->customer->forename }}{{ $order->customer->surname }}</p>
    @else
        <p><strong>Client:</strong> Informations non disponibles.</p>
    @endif

    @if ($order->deliveryAddress)
        <p><strong>Adresse de livraison:</strong><br>
            {{ $order->deliveryAddress->add1 }}<br>
            @if ($order->deliveryAddress->add2)
                {{ $order->deliveryAddress->add2 }}<br>
            @endif
            @if ($order->deliveryAddress->add3)
                {{ $order->deliveryAddress->add3 }}<br>
            @endif
            {{ $order->deliveryAddress->postcode }}
        </p>
    @else
        <p>Adresse de livraison non disponible.</p>
    @endif

    <p>Pour valider votre commande, vous devez nous envoyez un chèque à l'ordre de X, quand celui-ci sera validé, nous
        vous enverrons alors la commande.</p>
</body>

</html>
