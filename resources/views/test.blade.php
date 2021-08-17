<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

@php

    $bgs = glob(public_path('img/bg/*'));
    $bg = \Arr::random($bgs);
    $img = \Arr::random($bgs);

@endphp

<style>
    body {
        background-image: url("{{ $bg }}");
        background-size: cover;
        height: 2894px;
        width: 4093px;
        font-size: 100px;
        /* font-family: 'irohamaru-mikami-Light', sans-serif; */
        /* font-family: "komorebi-gothic-P", sans-serif; */
        /* position: relative; */
        color: #222;
    }

</style>

<body>
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
    ああああああああ
</body>

</html>
