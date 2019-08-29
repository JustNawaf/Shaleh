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
<div class="m-0 ">
    {{-- <div class="col-12 col-md-12 col-sm-12 col-xs-4"> --}}
        <div id="shaleh" class="d-flex flex-wrap">
            {{-- @foreach ($shalehat as $shaleh) --}}
            @for($i=0;$i<15;$i++)
            <div class="col-12 col-md-4 col-lg-3  mt-5 w-100 h-100">
                <example-component ></example-component>
            </div>
            @endfor
            {{-- @endforeach --}}
        </div>
    {{-- </div> --}}
    {{-- <div class="col-12 col-md-3 w-100 col-sm-12 col-xs-4">
        <div class="card text-left">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
    </div> --}}
</div>
<script>
    // $$("#input-id").rating({'size':'lg'});
</script>
@endsection
