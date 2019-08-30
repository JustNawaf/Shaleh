@extends('layouts.app')
<style>
    .shaleh-img {
        width: 100%;
        height: 40%;
    }

    @media only screen and (max-width: 600px) {
        .shaleh-img {}


    }
</style>
@section('content')
<div class="row m-0 p-0 text-right">
    <div class="col-12 col-md-8 col-lg-9 pt-5 ">
        <div class="d-flex flex-column align-items-center shadow-lg py-5">
            <h1>{{ $shaleh->shaleh_name }}</h1>
            {{-- <div class="w-100 h-25 ">
                <img src="/storage/images/navbarBackground2.jpg" class="img-thumbnail img-responsive">
            </div> --}}
            <div id="carouselExampleControls" class="carousel slide w-75" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/storage/images/navbarBackground2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/storage/images/navbarBackground2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/storage/images/navbarBackground2.jpg" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="mt-3 min-vh-100 shadow-lg rounded">
            <div class="w-100 h-100">
                <h1>الوصـف</h1>
                <h4 class="mr-5">{{ $shaleh->shaleh_desc }}</h4>
            </div>
            <div class="w-100 h-100 mt-5">
                <h1>الاسـعار</h1>
                <div>
                    <h3>السعر في اليوم العادي : {{ $shaleh->normal_price }} ريال</h3>
                    <h3>السعر في شهر رمضان المبارك : {{ $shaleh->ramadan_price }} ريال</h3>
                    <h3>السعر في عيد الفطر : {{ $shaleh->ftr_price }} ريال</h3>
                    <h3>السعر في عيد الاضحى : {{ $shaleh->adha_price }} ريال</h3>
                </div>
            </div>
            <div id="comment" class="w-100 h-100 mt-5 p-5">
                <h1>التعليقات</h1>
                <comment v-for="comment in 10"></comment>
            </div>
        </div>
    </div>
    <div id="small-shaleh" class="col-12 col-md-3 col-lg-3">
        <h1 class="text-center pt-5">مقتراحات من الشاليهات</h1>
        <div class="row">
            <small-shaleh-component v-for="shaleh in {{ $shalehat }} "></small-shaleh-component>
        </div>
    </div>
</div>
<script>
    new Vue({
        el:'#small-shaleh',
    });
    new Vue({
        el:'#comment',
    })

</script>
@endsection
