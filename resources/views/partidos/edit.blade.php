<div class="container">
    <h1>Editar Partido</h1>
    <form action="{{ route('partidos.update', $partido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $partido->codigo }}">
        </div>
        <div class="form-group">
            <label for="goles_casa">Goles Casa:</label>
            <input type="text" class="form-control" id="goles_casa" name="goles_casa" value="{{ $partido->goles_casa }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $partido->fecha }}">
        </div>
        <div class="form-group">
            <label for="goles_fuera">Goles Fuera:</label>
            <input type="text" class="form-control" id="goles_fuera" name="goles_fuera" value="{{ $partido->goles_fuera }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
