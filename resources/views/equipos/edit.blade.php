<h1>Editar equipo</h1>

    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $equipo->nombre }}" required>

        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" value="{{ $equipo->ciudad }}" required>

        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $equipo->codigo }}" required>

        <label for="estadio">Estadio:</label>
        <input type="text" name="estadio" id="estadio" value="{{ $equipo->estadio }}" required>

        <label for="aforo">Aforo:</label>
        <input type="text" name="aforo" id="aforo" value="{{ $equipo->aforo }}" required>

        <label for="ano">Año:</label>
        <input type="text" name="ano" id="ano" value="{{ $equipo->ano }}" required>

        <label for="presidente_id">Presidente:</label>
        <select name="presidente_id" id="presidente_id">
            <option value="">Seleccione un presidente</option>
            @foreach ($presidentes as $presidente)
                <option value="{{ $presidente->id }}" {{ $equipo->presidente_id == $presidente->id ? 'selected' : '' }}>
                    {{ $presidente->nombre }}
                </option>
            @endforeach
        </select>

        <button type="submit">Actualizar</button>
    </form>
