<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
    $data = 1000;
    $status = 1;
@endphp

<h1>Ini Adalah Halaman Profile {{ $data }}</h1>
<br>
@if($status == 1)
    Status Kamu Lulus
@elseif($status == 2)
    Status Kamu Lulus 100%
@else
Status Kamu Tidak Lulus
@endif

<br><br>
@switch($status)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch

<br><br>
@for ($i = 0; $i < 10; $i++)
    Angka ke - {{ $i }} <br>
@endfor

<br><br>
@for($no = 1; $no <= 10; $no++)
    @if($no % 2 == 0)
        Bilangan ke - {{$no}} genap<br>
    @else
        Bilangan  ke - {{$no}} ganjil<br>
    @endif
@endfor
<br>
@php
    $warna = '<div style="color:red">Silvi</div'
@endphp
        {!! $warna !!}
</body>
</html>

