<p class="price"> {{ number_format($products->getPrice($products->inPromozione), 2, ',', '.') }} € </p>

@if ($products->inPromozione == 1)
<p class="discprice"> Valore <del>{{ number_format($products->getPrice(false), 2, ',', '.') }} €</del><br>
    Sconto {{ $products->percentualeSconto }}%</p>
@endif