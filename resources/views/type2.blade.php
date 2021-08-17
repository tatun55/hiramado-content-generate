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
    $message1 = $faker->realText(rand(30,100), 3);
    $message2 = $faker->realText(rand(30,100), 3);

    $familyMemberProfile1 = \App\Models\FamilyMemberProfile::find(rand(1,4));
    $nickname1 = $familyMemberProfile1->nickname;
    $thumbnail1 = \App\Models\LineMessageImage::find($familyMemberProfile1->thumbnail)->image_url;
    $familyMemberProfile2 = \App\Models\FamilyMemberProfile::find(rand(1,4));
    $nickname2 = $familyMemberProfile2->nickname;
    $thumbnail2 = \App\Models\LineMessageImage::find($familyMemberProfile2->thumbnail)->image_url;

    $date = \Carbon\Carbon::now()->subDay(rand(3,7));
    $date_str = $date->format('Y年n月j日');

    $flag = rand(0,1);

@endphp

<style>
    body {
        background-image: url("img/bg/{{ $bg }}");
        background-size: cover;
        height: 2894px;
        width: 4093px;
        font-size: 80px;
        font-family: "komorebi-gothic-P", sans-serif;
        color: #333;
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
        padding: 0 15%;
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
        font-size: 90px;
        padding-bottom: 50px;
    }

    .date {
        font-size: 70px;
    }

    .img {
        width: 250px;
        height: 250px;
        margin-right: 50px;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .msg-wrapper {
        width: 60%;
    }

    .ml {
        margin-left: 40%;
    }

    .mb {
        margin-bottom: 50px;
    }

</style>

<body>
    <div id="body"></div>
    <div class="container">
        <div class="wrapper">
            <div class="msg-wrapper mb {{ $flag ? "" : "ml" }}">
                <div class="from">
                    <div class="img">
                        <img src="{{ $thumbnail1 }}" alt="">
                    </div>
                    <div class="info">
                        <div class="name">{{ $nickname1 }}</div>
                        <div class="date">{{ $date_str }}</div>
                    </div>
                </div>
                <div class="msg">
                    {{ $message1 }}
                </div>
            </div>
            <div class="msg-wrapper {{ $flag ? "ml" : "" }}">
                <div class="from">
                    <div class="img">
                        <img src="{{ $thumbnail2 }}" alt="">
                    </div>
                    <div class="info">
                        <div class="name">{{ $nickname2 }}</div>
                        <div class="date">{{ $date_str }}</div>
                    </div>
                </div>
                <div class="msg">
                    {{ $message2 }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
