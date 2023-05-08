<!-- Cuszomizacion para los botones de paginacion -->
@if ($paginator->hasPages())
    <div class="pagination container align-items-center d-flex">
        <button class="btn btn-previous{{ $paginator->onFirstPage() ? ' disabled' : '' }}"
            {{ $paginator->onFirstPage() ? 'disabled' : '' }}
            onclick="window.location='{{ $paginator->previousPageUrl() }}'">
            Anterior
        </button>

        @if ($paginator->hasMorePages())
            <button class="btn btn-admin"
                onclick="window.location='{{ $paginator->nextPageUrl() }}'">
                Siguiente
            </button>
        @else
            <button class="btn btn-previous{{ $paginator->currentPage() == $paginator->lastPage() ? ' disabled' : '' }}"
                {{ $paginator->currentPage() == $paginator->lastPage() ? 'disabled' : '' }}>
                Siguiente
            </button>
        @endif
    </div>
@endif