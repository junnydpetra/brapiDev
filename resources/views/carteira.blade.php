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
              <a href="{{ route('extrato') }}" data-title="Extrato" class="btn-relatorio btn btn-sm border border-dark btn-outline-dark mb-1"
                 data-bs-toggle="modal" data-bs-target="#myModal" id="extrato">Extrato</a>
              <a href="{{ route('deposito') }}" data-title="Depósito" class="btn-relatorio btn btn-sm border border-dark btn-success mb-1"
                 data-bs-toggle="modal" data-bs-target="#myModal" id="deposito">Depósito</a>
              <a href="{{ route('saque') }}" data-title="Saque" class="btn-relatorio btn btn-sm border border-dark btn-primary mb-1"
                 data-bs-toggle="modal" data-bs-target="#myModal" id="saque">Saque</a>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bg-light p-2 text-dark bg-opacity-25 bg-gradient">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
                        border-bottom border-dark flex-md-nowrap">
                        <h2 id="modal-title"></h2>
                        <div class="float-end">
                            <a href="{{ route('extrato') }}" data-title="Extrato" class="btn-dentro-modal btn btn-sm border border-dark btn-warning">Extrato</a>
                            <a href="{{ route('deposito') }}" data-title="Depósito" class="btn-dentro-modal btn btn-sm border border-dark btn-primary">Depósito</a>
                            <a href="{{ route('saque') }}" data-title="Saque" class="btn-dentro-modal btn btn-sm border border-dark btn-success">Saque</a>
                            <a href="{{ route('carteira') }}" class="btn btn-sm border border-dark btn-danger">Fechar</a>
                        </div>
                    </div>

                    <div class="modal-body" id="modal-body-stock">

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
            let modalTitle = $('#modal-title')
            let modalBody = $('#modal-body-stock');

            $('.btn-relatorio').on('click', function(event) {
                event.preventDefault();
                let href = $(this).attr('href');
                var title = $(this).data('title');
                modalTitle.text(title);
                $('.btn-dentro-modal').each((index, btn) => {
                    if ($(btn).data('title') == title) {
                        $(btn).hide();
                    } else {
                        $(btn).show();
                    }
                });

                $.get(href, function(data) {
                    modalBody.html(data);
                    modal.show();
                });
            })
        })
    </script>
@endpush

