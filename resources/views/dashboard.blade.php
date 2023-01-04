@extends('layouts.template')

@section('title', 'Home')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
                    pb-2 mb-3 border-bottom border-dark flex-md-nowrap p-0">
            <h2>Ações Em Alta</h2>
        </div>

        <div class="container">
            <div class="row spacing_cards">
                <div class="col-md margin_container">

                    <form action="{{ route('dashboard') }}" method="get">
                        <input type="text" name="search" id="search_input" class="form-control" placeholder="Busque uma ação">
                    </form>

                    {{-- <hr> --}}

                    @foreach ($apiArray as $api)

                        <div class="d-inline-flex p-2 card d-flex justify-content-center border border-dark mb-1 cards_size card-acao">
                            <img src="{{ $api->logo }}" class="card-img-top img-fluid mb-1 border border-dark">
                            <div class="card-body text-center">
                                <div class="text-success"><b>{{ $api->name }}</b></div>
                                <p class="small nome-acao"><b>R${{ number_format($api->close, 2, '.', ',') }}</b></p>

                                <button type="button" href="{{ route('stockInfoModal', $api->stock) }}"
                                    class="btn btn-outline-warning border border-dark btn-sm btn-modal text-dark"
                                    data-bs-toggle="modal"
                                    data-bs-target="#myModal">{{ $api->stock }}
                                </button>
                            </div>
                        </div>

                    @endforeach

                    <!-- Modal -->
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
                </div>
            </div>
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
