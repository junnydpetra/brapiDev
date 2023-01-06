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
              <a href="{{ route('extrato') }}" class="btn-relatorio btn btn-sm border border-dark btn-outline-dark"
                 data-bs-toggle="modal" data-bs-target="#myModal" id="extrato">Extrato</a>
              <a href="{{ route('deposito') }}" class="btn-relatorio btn btn-sm border border-dark btn-success"
                 data-bs-toggle="modal" data-bs-target="#myModal" id="deposito">Depósito</a>
              <a href="{{ route('saque') }}" class="btn-relatorio btn btn-sm border border-dark btn-primary "
                 data-bs-toggle="modal" data-bs-target="#myModal" id="saque">Saque</a>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bg-light p-2 text-dark bg-opacity-25 bg-gradient">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Últimos Relatórios</h4>
                    </div>

                    <div class="modal-body" id="modal-body-stock">

                    </div>

                    <div class="modal-footer d-inline">
                        <a><button type="button" class="float-start btn btn-outline-success border border-dark text-dark"
                            id="" data-bs-dismiss="modal">Comprar</button></a>
                        <a><button type="button" class="float-end btn btn-outline-danger border border-dark text-dark"
                            data-bs-dismiss="modal">Fechar</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection

@push('scripts')
    <script>
        $(function(){
            let modal = $('#myModal');
            let modalBody = $('#modal-body-stock');

            $('.btn-relatorio').on('click', function(event) {
                event.preventDefault();
                let href = $(this).attr('href');

                $.get(href, function(data) {
                    modalBody.html(data);
                    modal.show();
                });
            })
        })
    </script>
@endpush

