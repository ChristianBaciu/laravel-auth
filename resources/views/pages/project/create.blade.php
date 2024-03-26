@extends('layouts.app')

{{-- yield di app.blade, sotto #id stamperà questo codice --}}
@section('content')
    <div class="container">

        <div class="d-flex gap-2 my-4">
            <h2>Creazione</h2>
        </div>

        {{-- aggiungere sempre 'method POST' --}}
        <form action="{{route('dashboard.projects.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input
                    type="text"
                    class="form-control"
                    name="titolo"
                    id="titolo"
                    placeholder="..."
                />
            </div>

            <div class="mb-3">
                <label for="contenuto" class="form-label">Contenuto</label>
                <input
                    type="text"
                    class="form-control"
                    name="contenuto"
                    id="contenuto"
                    placeholder="..."
                />
            </div>

            {{-- aggiungere sempre 'type submit' --}}
            <button type="submit" class="btn btn-success">Conferma</button>

        </form>
    </div>
@endsection
