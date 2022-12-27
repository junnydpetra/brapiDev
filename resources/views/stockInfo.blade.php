@extends('layouts.template')

@section('title', 'Detalhes de Ação')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <table class="table table-success text-center">
            <tr class="">
                <th>AÇÃO</th>
                <th>SHORT NAME</th>
                <th>EMPRESA</th>
                <th>VALOR REGULAR DE MERCADO</th>
                <th>VALOR MAIS ALTO</th>
                <th>VALOR MAIS BAIXO</th>
            </tr>

            @foreach ($apiArray as $api)
                <tr>
                    <td>{{ $api->symbol }}</td>
                    <td>{{ $api->shortName }}</td>
                    <td>{{ $api->longName }}</td>
                    <td>{{ $api->regularMarketPrice }}</td>
                    <td>{{ $api->regularMarketDayHigh }}</td>
                    <td>{{ $api->regularMarketDayRange }}</td>
                </tr>
            @endforeach
        </table>

        <a href="#">
            <button class="btn btn-outline-primary float-start">Comprar</button>
        </a>

        <a href="{{ url()->previous() }}">
            <button class="btn btn-outline-success float-end">Voltar</button>
        </a>

    </main>
@endsection
