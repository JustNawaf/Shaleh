@extends('layouts.app')

@section('content')

<div class="row m-0 py-3 d-flex flex-row justify-content-center">
    <div class="col-12 col-md-6 text-right">
        <div class="form-group">
            <h1 for="my-input" class="text-sm-center text-center" style="color:#6c757d;">بحث</h1>
            <input id="my-input" class="form-control" type="text" name="" placeholder="ابحث عن اسم الشاليه">
        </div>
    </div>
</div>
<div class="row m-0 py-3">
    <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4 mb-3">
        <div class="card text-left">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-sm-12 col-xs-4">
        <div id="shaleh">
            @foreach ($shalehat as $index => $shaleh)
                <example-component  name="{{ $shaleh->shaleh_name }}"></example-component>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-3 w-100 col-sm-12 col-xs-4">
        <div class="card text-left">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
    </div>
</div>
<script>
    $$("#input-id").rating({'size':'lg'});
</script>
@endsection
