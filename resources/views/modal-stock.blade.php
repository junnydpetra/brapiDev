{{-- <table class="table border border-dark table-success text-center">
    <thead>
        <th>AÇÃO</th>
        <th>SHORT NAME</th>
        <th>EMPRESA</th>
        <th>VALOR REGULAR DE MERCADO</th>
        <th>VALOR MAIS ALTO</th>
        <th>VALOR MAIS BAIXO</th>
    </thead>

    <tbody>
        <td>{{ $stock->symbol }}</td>
        <td>{{ $stock->shortName }}</td>
        <td>{{ $stock->longName }}</td>
        <td>{{ $stock->regularMarketPrice }}</td>
        <td>{{ $stock->regularMarketDayHigh }}</td>
        <td>{{ $stock->regularMarketDayRange }}</td>
    </tbody>

</table> --}}

{{--
    {{$stock->symbol}}
    {{$stock->shortName}}
    {{$stock->longName}}
    {{$stock->regularMarketPrice}}
    {{$stock->regularMarketDayHigh}}
    {{$stock->regularMarketDayLow}} --}}



<div class="modal-body border border-dark bg-danger bg-gradient" >
    <b>AÇÃO: </b>{{$stock->symbol}}<br>
    <b>SHORT NAME: </b>{{$stock->shortName}}<br>
    <b>EMPRESA: </b>{{$stock->longName}}<br>
    <b>VALOR REGULAR DE MERCADO: </b>R${{$stock->regularMarketPrice}}<br>
    <b>VALOR MAIS ALTO: </b>R${{$stock->regularMarketDayHigh}}<br>
    <b>VALOR MAIS BAIXO: </b>R${{$stock->regularMarketDayLow}}<br>
</div>
