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
                            <tr class="">
                                <th>AÇÃO</th>
                            </tr>

                            @foreach ($apiArray as $api)
                                <tr>
                                    <td><a href="{{ route('stockInfo', $api) }}">{{ $api }}</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-lg"></div>
                </div>
            </div>

          </div>
        </main>

@endsection
