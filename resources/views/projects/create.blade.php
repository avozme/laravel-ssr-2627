
@extends('layouts.main')

@section('title', 'Crear proyecto')

@section('content')

    <h2>Crear nuevo proyecto</h2>

    <p>Introduce los datos del nuevo proyecto.</p>

    {{-- Errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <strong>Se han producido errores:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario --}}
    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        {{-- Título --}}
        <div>
            <label for="title">Título:</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
            >

            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        {{-- Descripción --}}
        <div>
            <label for="description">Descripción:</label>

            <textarea
                id="description"
                name="description"
                rows="4"
            >{{ old('description') }}</textarea>

            @error('description')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        {{-- Fecha de vencimiento --}}
        <div>
            <label for="due_date">Fecha límite:</label>

            <input
                type="date"
                id="due_date"
                name="due_date"
                value="{{ old('due_date') }}"
            >

            @error('due_date')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        {{-- Estado --}}
        <div>
            <label for="status">Estado:</label>

            <select id="status" name="status">
                <option value="pending"
                    {{ old('status', 'pending') == 'pending' ? 'selected' : '' }}>
                    Pendiente
                </option>

                <option value="in_progress"
                    {{ old('status') == 'in_progress' ? 'selected' : '' }}>
                    En progreso
                </option>

                <option value="completed"
                    {{ old('status') == 'completed' ? 'selected' : '' }}>
                    Completado
                </option>
            </select>

            @error('status')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        {{-- Botones --}}
        <button type="submit">
            Crear proyecto
        </button>

        <a href="{{ route('projects.index') }}">
            Cancelar
        </a>

    </form>

@endsection
