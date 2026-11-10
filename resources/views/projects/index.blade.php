
@extends('layouts.main')

@section('title', 'Todos los proyectos')

@section('content')

    <h2>Todos los proyectos</h2>

    <p>
        Bienvenido, {{ auth()->user()?->name ?? 'Invitado' }}
    </p>

    <p>
        <a href="{{ route('projects.create') }}">
            Crear proyecto
        </a>
    </p>

    @if ($projects->isEmpty())

        <p>No hay proyectos registrados.</p>

    @else

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha límite</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            {{ $project->due_date?->format('d/m/Y') ?? 'Sin fecha' }}
                        </td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project) }}">
                                Ver
                            </a>
                            |
                            <a href="{{ route('projects.edit', $project) }}">
                                Editar
                            </a>
                            <form
                                action="{{ route('projects.destroy', $project) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('¿Estás seguro de eliminar este proyecto?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    Eliminar
                                </button>
                            </form>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

@endsection
