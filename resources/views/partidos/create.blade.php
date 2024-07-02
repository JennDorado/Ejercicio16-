<div class="container">
    <h1>Crear Partido</h1>
    <form action="{{ route('partidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label for="goles_casa">Goles Casa:</label>
            <input type="text" class="form-control" id="goles_casa" name="goles_casa">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="form-group">
            <label for="goles_fuera">Goles Fuera:</label>
            <input type="text" class="form-control" id="goles_fuera" name="goles_fuera">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
