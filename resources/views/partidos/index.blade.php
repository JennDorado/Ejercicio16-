<div class="container">
    <h1>Lista de Partidos</h1>
    <a href="{{ route('partidos.create') }}" class="btn btn-primary">Crear Partido</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Goles Casa</th>
                <th>Fecha</th>
                <th>Goles Fuera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partido as $partido)
                <tr>
                    <td>{{ $partido->id }}</td>
                    <td>{{ $partido->codigo }}</td>
                    <td>{{ $partido->goles_casa }}</td>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->goles_fuera }}</td>
                    <td>
                        <a href="{{ route('partidos.show', $partido->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
