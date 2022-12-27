<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
        <title>BrapiDev - API</title>
    </head>

    <body>
        <div class="bg-dark p-4 m-3">
            <table class="table table-success text-center">
                <tr class="">
                    <th>AÇÃO</th>
                    <th>SHORT NAME</th>
                    <th>EMPRESA</th>
                    <th>VALOR REGULAR DE MERCADO</th>
                    <th>VALOR MAIS ALTO</th>
                    <th>VALOR MAIS BAIXO</th>
                </tr>
                @foreach ($apiArray as $api)

                <tr >
                    <td>{{ $api->symbol }}</td>
                    <td>{{ $api->shortName }}</td>
                    <td>{{ $api->longName }}</td>
                    <td>{{ $api->regularMarketPrice }}</td>
                    <td>{{ $api->regularMarketDayHigh }}</td>
                    <td>{{ $api->regularMarketDayRange }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </body>
</html>
