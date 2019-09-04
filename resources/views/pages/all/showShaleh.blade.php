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
        <div class="d-flex flex-column align-items-center py-5">
            <h1>{{ $shaleh->shaleh_name }}</h1>
            <div id="shaleh_page{{ $shaleh->id }}" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px;">
                    <div class="carousel-item active" style="border-radius: 10px;">
                        <img class="d-block my-shadow img-big" src="/storage/shalehat_images/{{ $shaleh->id }}/{{ $shaleh->imgs[0]->image_name }}">
                    </div>
                    @foreach ($shaleh->imgs as $key=>$img)
                        @if ($key >0)
                        <div class="carousel-item"  style="border-radius: 10px;">
                            <img  class="d-block img-big my-shadow" src="/storage/shalehat_images/{{ $shaleh->id }}/{{ $img->image_name }}">
                        </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#shaleh_page{{ $shaleh->id }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#shaleh_page{{ $shaleh->id }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h1 class="text-center">معلومات الشاليه</h1>
        <div class="mt-3 min-vh-100 rounded p-3" style="background-color:#D1D8E0;">
            <div class="w-100 h-100 p-3 text-light" style="background-color:#636970;">
                <h1 class="" style="color:black;">الوصـف</h1>
                <p class="h3 text-justify">الباهضة والفلبين وبالتحديد، هو لها. هذا هناك تعداد و. بعض ما يتعلّق مواقعها, حيث ما بقعة غرّة، والكساد, فقد تنفّس المتّبعة لم. ومن و يتعلّق التحالف. أما أي منتصف ابتدعها أوراقهم, يكن ان الله واُسدل البولندي. ضرب شواطيء الأولية عل, جُل أن بقسوة تشكيل إعمار.

                    يتم لم وأزيز المتّبعة. من أوزار غينيا حتى, و جورج وصغار لهيمنة أخذ, جمعت الإنزال الثانية عن بعد. في المزيفة الحيلولة تعد, غريمه الصفحة عسكرياً بل حدى. لمحاكم استمرار للإتحاد بل كما, بها وبدأت وقوعها، لم. ولم من ميناء الموسوعة. لإعلان مشاركة بحق أم.</p>
            </div>
            <div class="w-100 h-100 mt-5 py-3 px-3" style="background-color:#636970;">
                <h1 class="text-center text-light mb-3">الاسـعار</h1>
                <div class="row m-0 p-0">
                    <div class="col text-center bg-dark p-3 text-nowrap" style="margin-left:1px;margin-top:1px;">
                        <h3 class="text-light">اليوم العادي</h3>
                        <h3 class="text-success">{{ $shaleh->normal_price }} ريال</h3>
                    </div>
                    <div class="col text-center bg-dark p-3 text-nowrap" style="margin-left:1px;margin-top:1px;">
                        <h3 class="text-light">رمضان المبارك</h3>
                        <h3 class="text-success">{{ $shaleh->ramadan_price }} ريال</h3>
                    </div>
                    <div class="col text-center bg-dark p-3 text-nowrap" style="margin-left:1px;margin-top:1px;">
                        <h3 class="text-light">عيد الفطر</h3>
                        <h3 class="text-success">{{ $shaleh->ftr_price }} ريال</h3>
                    </div>
                    <div class="col text-center bg-dark p-3 text-nowrap" style="margin-left:1px;margin-top:1px;">
                        <h3 class="text-light">عيد الاضحى</h3>
                        <h3 class="text-success">{{ $shaleh->adha_price }} ريال</h3>
                    </div>
                </div>
            </div>
            <div class="w-100 h-100 mt-5 py-3 px-3" style="background-color:#636970;">
                <h1 class="text-center text-light mb-3">الخدمات</h1>
                <div class="row m-0 p-0">
                    @foreach ($shaleh->properties as $property)
                        <div class="col text-center bg-dark p-3 text-nowrap d-flex flex-column justify-content-center align-items-center" style="margin-left:1px;margin-top:1px;">
                            <i class="{{ $property->property->icon_name }} text-success" style="font-size:3rem;"></i>
                            <p class="text-nowrap text-light p-0 m-0">{{ $property->property->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-100 h-100 mt-5 py-3 px-3" style="background-color:#636970;">
                <h1 class="text-center text-light mb-3">معلومات التواصل</h1>
                <div class="row m-0 p-0">
                    <div class="col text-center bg-dark p-3 text-nowrap d-flex flex-column justify-content-center align-items-center" style="margin-left:1px;margin-top:1px;">
                        <p class="h1 text-light">رقم الجوال</p>
                        <p class="h4 text-nowrap p-0 m-0 text-success">{{ $shaleh->phone }}</p>
                    </div>
                    <div class="col text-center bg-dark p-3 text-nowrap d-flex flex-column justify-content-center align-items-center" style="margin-left:1px;margin-top:1px;">
                        <p class="h1 text-light">البريد الاكتروني</p>
                        <p class="h4 text-nowrap p-0 m-0 text-success">{{ $shaleh->email }}</p>
                    </div>
                </div>
            </div>
            <div id="comment" class="w-100 h-100 mt-5" >
                <h1>التعليقات</h1>
                <comment  v-for="comment in comments" :key="comment.id" :comment="comment"></comment>
                @if (auth()->user() != null )
                <form id="addComment" action="{{ route('add.comment',[$shaleh->id]) }}" method="POST" @submit.prevent="addComment('{{ route('add.comment',[$shaleh->id]) }}')">
                    @csrf
                    <div class="w-100 mt-5">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="new-comment">تعليق</label>
                                    <textarea class="form-control" id="new-comment" name="comment" placeholder="نص التعليق" rows="3" v-model="comment"></textarea>
                                    <small id="new-comment-help" class="form-text text-muted">يرجى اضافة تعليق واضح و صريح.</small>
                                </div>
                                <div class="from-group">
                                    <label for="rating-comment">تقييم الشاليه</label>
                                    <select id="rating-comment" class="custom-select" name="rating">
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
        data:{
            comments:@json($shaleh->comments),
            comment:''
        },
        methods: {
            addComment:function(route){
            let myForm = new FormData($('#addComment')[0]);
            // console.log(this.comments);
            axios.post(route,myForm).then((response)=>{
                this.comments.push(response.data);
                console.log(response.data);
                // $('.modal').modal('show');
            }).catch(function(error){
                console.log(error);
            });
            }
        },
    })

</script>
@endsection
