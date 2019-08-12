@extends('layouts.app')

@section('content')
<div id="app">

    <div class="row my-5">
        <div class="col">
            <h1 class="text-center">شـاليه</h1>
        </div>
    </div>
    <div class="row m-0 py-3 d-flex flex-row justify-content-center">

        <div class="col-12 col-md-6 text-right">
            <div class="form-group">
                <h1 for="my-input" class="text-sm-center text-center">بحث</h1>
                <input id="my-input" class="form-control" type="text" name="" placeholder="ابحث عن اسم الشاليه">
            </div>
        </div>
    </div>

</div>

@endsection
