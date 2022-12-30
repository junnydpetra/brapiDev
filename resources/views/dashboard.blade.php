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
                    <div class="col-lg"></div>
                    <div class="col-lg">
                        <table class="table table-success text-center table-bordered">
                            <th class="">AÇÃO</th>
                            <th class="">MODAL</th>

                            @foreach ($apiArray as $api)
                                <tr>
                                    {{-- <td><a href="{{ route('stockInfo', $api) }}"><button class="btn btn-success btn-sm">{{ $api }}</button></a></td> --}}
                                    <td><a href="{{ route('stockInfoModal', $api) }}"><button class="btn btn-success btn-sm">{{ $api }}</button></a></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" href="{{ route('stockInfoModal', $api) }}" class="btn btn-primary btn-sm btn-lg btn-modal" data-bs-toggle="modal" data-bs-target="#myModal">
                                        Modal
                                    </button></td>
                                </tr>

                                    <!-- Modal -->
                                    <div class="modal fade .bg-warning.bg-gradient" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
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
                        </table>
                    </div>
                    <div class="col-lg"></div>
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
