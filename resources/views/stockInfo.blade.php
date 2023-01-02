@extends('layouts.template')

@section('title', 'Detalhes de Ação')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <table class="table border border-dark table-success text-center">
            <thead>
                <th>AÇÃO</th>
                <th>SHORT NAME</th>
                <th>EMPRESA</th>
                <th>VALOR REGULAR DE MERCADO</th>
                <th>VALOR MAIS ALTO</th>
                <th>VALOR MAIS BAIXO</th>
            </thead>

            @foreach ($apiArray as $api)
                <tbody>
                    <td>{{ $api->symbol }}</td>
                    <td>{{ $api->shortName }}</td>
                    <td>{{ $api->longName }}</td>
                    <td>{{ $api->regularMarketPrice }}</td>
                    <td>{{ $api->regularMarketDayHigh }}</td>
                    <td>{{ $api->regularMarketDayRange }}</td>
                </tbody>
            @endforeach
        </table>

    </main>
@endsection
