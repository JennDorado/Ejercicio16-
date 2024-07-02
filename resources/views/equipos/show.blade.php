<h1>Detalles del equipo</h1>

    <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
    <p><strong>Ciudad:</strong> {{ $equipo->ciudad }}</p>
    <p><strong>Código:</strong> {{ $equipo->codigo }}</p>
    <p><strong>Estadio:</strong> {{ $equipo->estadio }}</p>
    <p><strong>Aforo:</strong> {{ $equipo->aforo }}</p>
    <p><strong>Año:</strong> {{ $equipo->ano }}</p>
    <p><strong>Presidente:</strong> {{ $equipo->presidente->nombre ?? 'Sin presidente' }}</p>

    <a href="{{ route('equipos.index') }}">Volver a la lista de equipos</a>
