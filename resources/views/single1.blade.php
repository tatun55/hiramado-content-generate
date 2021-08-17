<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>

@php

    $bgs = glob(public_path('img/bg/*'),GLOB_BRACE);
    $bg = basename(\Arr::random($bgs));
    $faker = \Faker\Factory::create('ja_JP');
    $message = $faker->realText(rand(100,200), 3);

    $familyMemberProfile = \App\Models\FamilyMemberProfile::find(rand(1,4));
    $nickname = $familyMemberProfile->nickname;
    $thumbnail = \App\Models\LineMessageImage::find($familyMemberProfile->thumbnail)->image_url;

    $date = \Carbon\Carbon::now()->subDay(rand(3,7));
    $date_str = $date->format('Y年n月j日');

@endphp

<style>
    body {
        background-image: url("img/bg/{{ $bg }}");
        background-size: cover;
        height: 2894px;
        width: 4093px;
        font-size: 90px;
        font-family: "komorebi-gothic-P", sans-serif;
        color: #444;
        position: relative;
    }

    #body {
        position: absolute;
        height: 2894px;
        width: 4093px;
        background-color: rgba(255, 255, 255, 0.3);
        z-index: -1;
    }

    .container {
        padding: 0 20%;
        display: flex;
        align-items: center;
        vertical-align: middle;
        height: 100%;
    }

    .msg {
        line-height: 1.6;
        letter-spacing: 5px
    }

    .from {
        display: flex;
        justify-content: center;
        align-items: center;
        vertical-align: middle;
        margin-bottom: 50px;
    }

    .name {
        font-size: 100px;
        padding-bottom: 50px;
    }

    .date {
        font-size: 80px;
    }

    .img {
        width: 300px;
        height: 300px;
        margin-right: 50px;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

</style>

<body>
    <div id="body"></div>
    <div class="container">
        <div class="wrapper">
            <div class="from">
                <div class="img">
                    <img src="{{ $thumbnail }}" alt="">
                </div>
                <div class="info">
                    <div class="name">{{ $nickname }}</div>
                    <div class="date">{{ $date_str }}</div>
                </div>
            </div>
            <div class="msg">
                {{ $message }}
            </div>
        </div>
    </div>
</body>

</html>
