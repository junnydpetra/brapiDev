@extends('layouts.template')

@section('title', 'Extratos')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <h2>Operações Recentes</h2><hr>
        <div class="border-dark text-dark mb-4">
            <div class="text-center">
              <p>Teste!</p>
            </div>
        </div>
        <a href="{{ url()->previous() }}"><button class="btn btn-warning float-end">Voltar</button></a>
    </main>


@endsection

@push('scripts')
    <script></script>
@endpush

