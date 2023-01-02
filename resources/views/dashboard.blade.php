@extends('layouts.template')

@section('title', 'Home')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
            <h2>Ações Em Alta</h2>
        </div>

        <div class="container">
            <div class="row" style="margin-left: 35px;">
                <div class="col-md" style="margin: 0 auto; width: 50%;">

                    @foreach ($apiArray as $api)

                                <div class="d-inline-flex p-2 card d-flex justify-content-center border border-dark mb-1"
                                style="width: 200px; margin: 25px 15px; background-color: #F5FFFA;">
                                    <img src="{{ $api->logo }}" class="card-img-top img-fluid mb-1 border border-dark">
                                    <div class="card-body text-center">
                                        <p class="small">{{ $api->name }}</p>

                                        <button type="button" href="{{ route('stockInfoModal', $api->stock) }}"
                                            class="btn btn-outline-warning border border-dark btn-sm btn-modal text-dark" data-bs-toggle="modal"
                                            data-bs-target="#myModal">{{ $api->stock }}
                                        </button>
                                    </div>
                                </div>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light p-2 text-dark bg-opacity-25 bg-gradient">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Últimos Relatórios</h4>
                                        </div>

                                        <div class="modal-body" id="modal-body-stock">

                                        </div>

                                        <div class="modal-footer float-end">
                                            <a><button type="button" class="btn btn-outline-warning text-dark" data-bs-dismiss="modal">Fechar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@push('scripts')
    <script>
        $(function(){
            $('.btn-modal').on('click', function() {
                let url = $(this).attr('href');

                $.get(url, function(data) {
                    $('#modal-body-stock').html(data)
                })
            })
        })
    </script>
@endpush
