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
<div id="app" class="m-0 ">
    {{-- <div class="col-12 col-md-12 col-sm-12 col-xs-4"> --}}
    <div class="row p-0 m-0">
        <div class="col-12 col-md-2 col-lg-2">
            <h1 class="text-center font-weight-bold">هنا البحث</h1>
            <div class="text-right">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم الشاليه</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="اسم الشاليه">
                    <small id="emailHelp" class="form-text text-muted">الرجاء وضع اسم شاليه واضح حتى تتم عملية البحث</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">الرجاء تحديد المنطقة</label>
                    <select class="form-control" name="city_id">
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">الرجاء تحديد المنطقة المراد البحث بها</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">تحديد الاسعار</label>
                    <select class="form-control" name="city_id">
                        <option value="1">تصاعدي</option>
                        <option value="1">تنازلي</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">الرجاء اختيار الاسعار تصاعديا او تنازليا</small>
                </div>
                <button type="submit" class="btn btn-secondary w-100">بحث</button>
            </div>
        </div>
        <div class="col-12 col-md-10 col-lg-10">
            <h1 class="text-center font-weight-bold">هنا النتائج</h1>
            <div id="shaleh" class="d-flex flex-wrap">
                    <example-component v-for="shaleh in shalehat" :key='shaleh.id' :id="shaleh.id" :shaleh="shaleh">
                    </example-component>
            </div>
        </div>
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
    var vm = new Vue({
        el:'#shaleh',
        data() {
            return {
                shalehat:@json($shalehat)
            }
        },
        computed: {
            MyShalehat:function(){
                return this.shalehat.filter((e)=>{
                    return e.id < 15;
                });
            }
        },
    });
</script>
@endsection
