@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/kungfu.jpg" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">

            <div>
                <h1>Chao Ling</h1>
            </div>

            <div class="d-flex">
                <div style="padding-right: 25px"><strong>1000</strong> posts</div>
                <div style="padding-right: 25px"><strong>1M</strong> followers</div>
                <div style="padding-right: 25px"><strong>1</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">Kung Fu Panda</div>
            <div>A cute but dangerous kungfu fighter from shaolin,China </div>
            <div><a href="#">www.kungfupanda.com</a></div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/pao.jpg" class="w-100">
        </div>

        <div class="col-4">
            <img src="/images/pao2.jpg" class="w-100">
        </div>

        <div class="col-4">
            <img src="/images/pao3.jpg" class="w-100">
        </div>
    </div>

</div>
@endsection
