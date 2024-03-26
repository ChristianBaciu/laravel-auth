@extends('layouts.app')

{{-- yield di app.blade, sotto #id stamperà questo codice --}}
@section('content')
    <div class="container">

        <div class="my-4">
            <h2>Modifica</h2>
        </div>

        {{-- parametro '$project->id' --}}
        <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input
                    type="text"
                    class="form-control"
                    name="titolo"
                    id="titolo"
                    placeholder="..."
                    value="{{ old('titolo', $project->titolo) }}"
                />
                {{-- for, name, id uguali --}}
            </div>

            <div class="mb-3">
                <label for="contenuto" class="form-label">Contenuto</label>
                <input
                    type="text"
                    class="form-control"
                    name="contenuto"
                    id="contenuto"
                    placeholder="..."
                    value="{{ old('contenuto', $project->contenuto) }}"
                />
                {{-- for, name, id uguali --}}
            </div>

            {{-- aggiungere sempre 'type submit' --}}
            <button type="submit" class="btn btn-success">Conferma modifica</button>

        </form>
    </div>
@endsection
