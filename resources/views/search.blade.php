<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['title']}}</title>
</head>
<body>


<section class="container">
@if(count($barang))

<div class="text">hasil pencarian : {{$ktkunci}}</div>


@foreach($barang as $i => $data)


<h5>{{ $data->nama_barang }}</h5>

<div class="divider"></div>

<h2>{{ $data->desc }}</h2>


@endforeach




	
    @else
       <div class="card-panel red darken-3 white-text">Oops.. Data  Tidak Ditemukan</div>
    @endif




</section>
    
</body>
</html>