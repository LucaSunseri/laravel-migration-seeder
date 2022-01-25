@extends('layouts.main')

@section('content')

    <main class="container">
        <h1>I nostri Pacchetti</h1>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Modalità</th>
                    <th scope="col">Città</th>
                    <th scope="col">Nazione</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viaggi as $viaggio)
                    <tr>
                        <th scope="row">{{ $viaggio->id }}</th>
                        <td>{{ $viaggio->descrizione }}</td>
                        <td>{{ $viaggio->modalita }}</td>
                        <td>{{ $viaggio->nazione }}</td>
                        <td>{{ $viaggio->citta }}</td>
                        <td>{{ $viaggio->prezzo }}€</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </main>

@endsection
