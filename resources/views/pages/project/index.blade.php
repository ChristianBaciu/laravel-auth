@extends('layouts.app')

{{-- yield di app.blade, sotto #id stamperà questo codice --}}
@section('content')
    <div class="container">

        <div class="d-flex gap-2 my-4">
            <h2>Tabella</h2>
            <button class="btn btn-success">Crea</button>
        </div>

        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITOLO</th>
                        <th scope="col">CONTENUTO</th>
                        <th scope="col">AZIONI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->titolo}}</td>
                            <td>{{$item->contenuto}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-warning">Modifica</button>
                                    <button class="btn btn-danger">Elimina</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
