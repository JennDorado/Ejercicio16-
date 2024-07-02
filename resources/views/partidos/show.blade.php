<div class="container">
    <h1>Detalles del Partido</h1>
    <p>ID: {{ $partido->id }}</p>
    <p>Código: {{ $partido->codigo }}</p>
    <p>Goles Casa: {{ $partido->goles_casa }}</p>
    <p>Fecha: {{ $partido->fecha }}</p>
    <p>Goles Fuera: {{ $partido->goles_fuera }}</p>
    <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Volver</a>
</div>
