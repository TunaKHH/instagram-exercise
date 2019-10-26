@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle"src="https://instagram.fkhh1-1.fna.fbcdn.net/vp/029b8c8a64735e0ba0c80903fefa5f16/5E646336/t51.2885-19/s150x150/16788870_755113981342803_2112577061510971392_a.jpg?_nc_ht=instagram.fkhh1-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>116</strong> follows</div>
                <div class="pr-5"><strong>153</strong> following</div>
                
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkhh1-2.fna.fbcdn.net/vp/4a7d57e6fb1aafac020647c947e73c75/5E623A2F/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/73174649_2404377109881299_3305170173981020096_n.jpg?_nc_ht=instagram.fkhh1-2.fna.fbcdn.net&_nc_cat=111">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkhh1-2.fna.fbcdn.net/vp/06c8553aaa7f4dbba5bac35bec9381be/5E651981/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/74578570_124228965652556_324451647304105064_n.jpg?_nc_ht=instagram.fkhh1-2.fna.fbcdn.net&_nc_cat=108">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkhh1-1.fna.fbcdn.net/vp/2ccf3f372ae48cb0eb427645d3c84b75/5E4D1419/t51.2885-15/sh0.08/e35/c0.109.925.925a/s640x640/71888114_384946162459981_3818877377020383907_n.jpg?_nc_ht=instagram.fkhh1-1.fna.fbcdn.net&_nc_cat=101">
        </div>
    </div>
</div>
@endsection