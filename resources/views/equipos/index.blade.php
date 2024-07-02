<h1>Equipos</h1>
    <a href="{{ route('equipos.create') }}">Crear nuevo equipo</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Presidente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->ciudad }}</td>
                    <td>{{ $equipo->presidente->nombre ?? 'Sin presidente' }}</td>
                    <td>
                        <a href="{{ route('equipos.show', $equipo->id) }}">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
