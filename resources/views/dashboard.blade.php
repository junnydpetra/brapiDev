@extends('layouts.template')

@section('title', 'Home')

@section('content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h2>Ações Em Alta</h2>
          </div>

          <div class="table-responsive">

            <div class="container">
                <div class="row">
                    <div class="col-md">
                    {{-- <div class="col-lg"> --}}

                        {{-- <table class="table table-success text-center table-bordered"> --}}

                            <div class="container">

                                    @foreach ($apiArray as $api)
                                        {{-- <tr> --}}
                                            {{-- <td class="card mb-2"> --}}

                                                <div class="d-inline-flex p-2 card d-flex justify-content-center border border-dark mb-1 bg-light" style="width: 200px; margin: 25px 15px;">
                                                    <img src="{{ $api->logo }}" class="card-img-top img-fluid mb-1 border-bottom border-dark">
                                                    <div class="card-body text-center">
                                                        <button type="button" href="{{ route('stockInfoModal', $api->stock) }}" class="btn btn-outline-warning border border-dark btn-sm btn-modal text-dark" data-bs-toggle="modal" data-bs-target="#myModal">{{ $api->stock }}</button>
                                                    </div>
                                                </div>
                                            {{-- </td> --}}
                                        {{-- </tr> --}}

                                        {{-- <tr><img src="" alt=""></tr> --}}

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content bg-light p-2 text-dark bg-opacity-25 bg-gradient">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Últimos Relatórios</h4>
                                                        </div>

                                                        <div class="modal-body" id="modal-body-stock">

                                                        </div>

                                                        <div class="modal-footer">
                                                            <a><button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button></a>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    @endforeach

                            </div>

                        {{-- </table> --}}
                    </div>
                </div>
                <div class="col-md"></div>
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
