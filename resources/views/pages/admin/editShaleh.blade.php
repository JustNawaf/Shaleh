@extends('layouts.app')

@section('content')

<div id="edit-shaleh">
    <div class="container d-flex bg-dark text-light mt-3 p-2 justify-content-center align-items-center"  style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom-left-radius: 25%px;">
        <h1>تعديل الشاليه</h1>
    </div>
    <add-shaleh-form :properties="{{ $properties }}" :cities="{{ $cities }}" :shaleh ="{{ $shaleh }}" route="{{ route('admin.store.shaleh') }}" csrf="{{ Session::token() }}"></add-shaleh-form>
</div>

<script>
    new Vue({
        el:'#edit-shaleh'
    });
</script>
@endsection
