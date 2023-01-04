@extends('layouts.template')

@section('title', 'Extratos')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 position-relative">

        <h2>Operações Recentes</h2><hr>
        <div class="border-dark text-dark mb-4">
            <div class="text-center">
              <p>Teste!</p>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="position-absolute bottom-0 end-0">
            <button class="btn btn-outline-warning text-dark float-end border border-dark">Voltar</button>
        </a>
    </main>

@endsection

@push('scripts')
    <script></script>
@endpush

