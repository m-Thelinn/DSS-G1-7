<!-- Cuszomizacion para los botones de paginacion -->
@if ($paginator->hasPages())
    <div class="pagination">
        <button class="btn btn-secondary{{ $paginator->onFirstPage() ? ' disabled' : '' }}"
            {{ $paginator->onFirstPage() ? 'disabled' : '' }}
            onclick="window.location='{{ $paginator->previousPageUrl() }}'">
            Anterior
        </button>

        @if ($paginator->hasMorePages())
            <button class="btn btn-primary"
                onclick="window.location='{{ $paginator->nextPageUrl() }}'">
                Siguiente
            </button>
        @else
            <button class="btn btn-secondary{{ $paginator->currentPage() == $paginator->lastPage() ? ' disabled' : '' }}"
                {{ $paginator->currentPage() == $paginator->lastPage() ? 'disabled' : '' }}>
                Siguiente
            </button>
        @endif
    </div>
@endif