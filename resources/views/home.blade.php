<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello world</h1>

  <div class="container">

        <h1>Ciao {{ $nome }} {{ $cognome }}</h1>
        @if (count($gatti) > 0)
            <ul>
                @foreach ($gatti as $gatto)
                    @if ($loop->first)
                        <li>Primo gatto: {{ $gatto }}</li>
                    @elseif ($loop->last)
                        <li>Ultimo gatto: {{ $gatto }}</li>
                    @else
                        <li>{{ $gatto }}</li>
                    @endif

                @endforeach
            </ul>
        @else
            <h2>Nessun gatto</h2>
        @endif

    </div>
</body>
</html>