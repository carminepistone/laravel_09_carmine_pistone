<div class="col-4 col-md-4 mb-4">
    <div class="card h-60 cardcustom">
       
        @if (!$voceMenu->img)
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="{{ $voceMenu['nome'] }}">
        @else
            <img src="{{Storage::url($voceMenu->img)}}" class="card-img-top" alt="{{ $voceMenu['nome'] }}">

        @endif

            <div class="card-body">
                <h5 class="card-title">{{ $voceMenu['nome'] }}</h5>
                <h6 class="text-muted">{{ $voceMenu['categoria'] }}</h6>
                <p class="card-text">{{ $voceMenu['ingredienti'] }}</p>
                <h6 class="fw-bold">€ {{ number_format($voceMenu['prezzo'], 2) }}</h6>
            </div>
    </div>
</div>