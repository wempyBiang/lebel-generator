<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    {{-- @dd($data)  --}}
    {{-- maks 28 item --}}

    @for ($i=0; $i <$fullPage; $i++)
        @php
            $startingIndex = $i * 28;
        @endphp 
        
        <div class="content">
            @for ($j=$startingIndex; $j <$startingIndex+28; $j++)
                <div class="lebel">
                    <div class="title">
                        <p class="barcode">[{{ $data[$j]['barcode'] }}]</p>
                        <p class="name"> {{ $data[$j]['nama'] }} </p>
                    </div>
                    <div class="price">
                        <p>Rp {{ $data[$j]['harga'] }}</p>
                    </div>
                </div>
            @endfor
        </div>
    @endfor

    {{-- rest label --}}
    @if ($restElement>0)
        @php
            $startingIndexRest = $i*28;
        @endphp
        <div class="content">
            @for ($i=$startingIndexRest; $i <count($data); $i++)
                <div class="lebel">
                    <div class="title">
                        <p class="barcode">[{{ $data[$i]['barcode'] }}]</p>
                        <p class="name"> {{ $data[$i]['nama'] }} </p>
                    </div>
                    <div class="price">
                        <p>Rp {{ $data[$i]['harga'] }}</p>
                    </div>
                </div>
            @endfor
        </div>
    @endif

</body>
</html>