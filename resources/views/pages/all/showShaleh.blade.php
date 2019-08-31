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
        <div class="d-flex flex-column align-items-center py-5 col-12">
            <h1>{{ $shaleh->shaleh_name }}</h1>
            {{-- <div class="w-100 h-25 ">
                <img src="/storage/images/navbarBackground2.jpg" class="img-thumbnail img-responsive">
            </div> --}}
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
        <div class="mt-3 min-vh-100 rounded">
            <div class="w-100 h-100">
                <h1>الوصـف</h1>
                <p class="mr-5">{{ $shaleh->shaleh_desc }}</p>
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
            @if (auth()->user() != null && auth()->user()->id != $shaleh->user_id )
            <form action="{{ route('add.comment',[$shaleh->id]) }}" method="POST">
                @csrf
                <div class="w-100 mt-5">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="new-comment">تعليق</label>
                                <textarea class="form-control" id="new-comment" name="comment" placeholder="نص التعليق" rows="3"></textarea>
                                <small id="new-comment-help" class="form-text text-muted">يرجى اضافة تعليق واضح و صريح.</small>
                            </div>
                            <div class="from-group">
                                <label for="rating-comment">تقييم الشاليه</label>
                                <select id="rating-comment" class="custom-select" name="rating">
                                    <option selected>اختر تقييم من 1 الى 5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                {{-- <small id="new-comment-help" class="form-text text-muted">يرجى اضافة تعليق واضح و صريح.</small> --}}
                            </div>
                        </div>
                        <button id="add-comment" class="btn btn-dark w-100">اضافة تعليق</button>
                    </div>

            </form>
            @endif
            <div id="comment" class="w-100 h-100 mt-5">
                <h1>التعليقات</h1>
                    <comment  v-for="comment in {{ $shaleh->comments }}" :key="comment.id" :comment="comment"></comment>
            </div>
        </div>
    </div>
    <div id="small-shaleh" class="col-12 col-md-3 col-lg-3">
        <h1 class="text-center pt-5">مقتراحات من الشاليهات</h1>
        <div class="row">
            <small-shaleh-component v-for="shaleh in {{ $shalehat }}" :key="shaleh.id" :shaleh="shaleh"></small-shaleh-component>
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
