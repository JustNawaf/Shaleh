@extends('layouts.app')

@section('content')
<div id="app" class="m-0 p-3">
    <div id="shalehat" class="row p-0 m-0">
        <div class="col-12 col-md-2 col-lg-2">
            <h1 class="text-center" style="">البحث</h1>
            <form-search @shalehat="showResult($event)" :cities="{{ $cities }}" route="{{ route('search') }}" ></form-search>
        </div>
        <div class="col-12 col-md-10 col-lg-10">
            <div class="row">
                <example-component v-for="shaleh in shalehat" :key='shaleh.id' :id="shaleh.id" :shaleh="shaleh" :imgs="shaleh.imgs" :current_user="{{ auth()->check() ? auth()->user()->id:-1 }}"></example-component>
            </div>
        </div>
    </div>
</div>
<script>

    var vm = new Vue({
        el:'#shalehat',
        data() {
            return {
                shalehat:@json($shalehat),
            }
        },
        methods: {
            showResult:function(data){
                this.shalehat=data;
            }
        },
    });
</script>
@endsection
