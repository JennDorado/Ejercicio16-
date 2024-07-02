<h1>Crear nuevo equipo</h1>

<form action="{{ route('equipos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="ciudad">Ciudad:</label>
    <input type="text" name="ciudad" id="ciudad" required>

    <label for="codigo">Código:</label>
    <input type="text" name="codigo" id="codigo" required>

    <label for="estadio">Estadio:</label>
    <input type="text" name="estadio" id="estadio" required>

    <label for="aforo">Aforo:</label>
    <input type="text" name="aforo" id="aforo" required>

    <label for="ano">Año:</label>
    <input type="text" name="ano" id="ano" required>

    <label for="presidente_id">Presidente:</label>
    <select name="presidente_id" id="presidente_id">
        <option value="">Seleccione un presidente</option>
        @foreach ($presidentes as $presidente)
            <option value="{{ $presidente->id }}">{{ $presidente->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>
