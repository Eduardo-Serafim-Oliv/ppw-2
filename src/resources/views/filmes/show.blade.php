<h1>{{ $filme->nome }}</h1>

@foreach ($avaliacoes as $av)
    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <strong>{{ $av->user->name }}</strong>

                <span class="badge bg-primary">
                    {{ $av->nota }}/5
                </span>
            </div>

            <p class="mb-0">
                {{ $av->comentario }}
            </p>

            <small class="text-muted">
                {{ $av->created_at->diffForHumans() }}
            </small>
        </div>
    </div>
@endforeach
