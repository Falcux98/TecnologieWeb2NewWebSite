<!--Riga di paginazione-->
@if ($paginator->lastPage() != 1)
<div style="text-align: center; color: #696763;  ">
    
    {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }}  --

    <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
        <a style="color:#FE980F" href="{{ $paginator->url(1) }}">Inizio</a> | <!-- vedi slide42 url()-->
    @else
        Inizio |
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
        <a style="color:#FE980F" href="{{ $paginator->previousPageUrl() }}">&lt; Precedente</a> |
    @else
        &lt; Precedente |
    @endif

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <a style="color:#FE980F" href="{{ $paginator->nextPageUrl() }}">Successivo &gt;</a> |
    @else
        Successivo &gt; |
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <a style="color:#FE980F" href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
    @else
        Fine
    @endif
</div>
@endif