@extends('layouts.template')

@section('title', 'Carteira')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <h2>Carteira Digital</h2><hr>
        <div class="card border border-dark text-dark bg-warning mb-4 wallet_card">
            <div class="card-body text-center">
              <h4 class="card-title"><b>Seu Saldo</b>: R${{ number_format($carteira->saldo, 2, '.', ',') }}</h4>
              <p class="card-text"></p>
              <a href="#" class="btn btn-sm border border-dark btn-outline-dark">Extrato</a>
              <a href="#" class="btn btn-sm border border-dark btn-success">Depósito</a>
              <a href="#" class="btn btn-sm border border-dark btn-primary ">Saque</a>
            </div>
        </div>

    </main>

@endsection

@push('scripts')
    <script></script>
@endpush

