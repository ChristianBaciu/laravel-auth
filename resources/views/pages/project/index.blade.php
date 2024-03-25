@extends('layouts.app')

{{-- yield di app.blade --}}
@section('content')
    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITOLO</th>
                        <th scope="col">CONTENUTO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->titolo}}</td>
                            <td>{{$item->contenuto}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
