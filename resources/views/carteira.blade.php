@extends('layouts.template')

@section('title', 'Carteira')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
                    border-bottom border-dark flex-md-nowrap">
            <h2>Carteira Digital</h2>
        </div>

        <div class="card border border-dark text-dark bg-warning mt-2 wallet_card">
            <div class="card-body text-center">
              <h4 class="card-title"><b>Seu Saldo</b>: R${{ number_format($carteira->saldo, 2, '.', ',') }}</h4>
              <p class="card-text"></p>
              <a href="{{ route('extrato') }}" class="btn btn-sm border border-dark btn-outline-dark" id="extrato">Extrato</a>
              <a href="{{ route('deposito') }}" class="btn btn-sm border border-dark btn-success" id="deposito">Depósito</a>
              <a href="{{ route('saque') }}" class="btn btn-sm border border-dark btn-primary " id="saque">Saque</a>
            </div>
        </div>

    </main>

@endsection

@push('scripts')
    <script>
        $(function(){
            const cardAcoes = $('.card-acao');

            $('#search_input').on('keyup', function() {
                let searchValue = $(this).val();
                cardAcoes.each(function(index, card) {
                    if($(card).find('.nome-acao').text() == searchValue) {

                        $(cardAcoes[index]).show();
                    } else {
                        console.log('esconder cartao')
                        $(cardAcoes[index]).hide();
                    }
                });
            })

            $('.btn-modal').on('click', function() {
                let url = $(this).attr('href');

                $.get(url, function(data) {
                    $('#modal-body-stock').html(data)
                })
            })
        })
    </script>
@endpush

