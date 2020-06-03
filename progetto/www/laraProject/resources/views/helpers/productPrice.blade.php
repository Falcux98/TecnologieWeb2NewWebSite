@can('show-discount')
    <h4 style="color:black"> {{ number_format($products->getPrice($products->inPromozione), 2, ',', '.') }} € </h4>
    @if ($products->inPromozione == 1)
        <p class="discprice"> Valore <del>{{ number_format($products->getPrice(false), 2, ',', '.') }} €</del><br>
        Sconto {{ $products->percentualeSconto }}%</p>
    @endif
@else
    <p class="price"> {{ number_format($products->getPrice(false), 2, ',', '.') }} € </p>
@endcan