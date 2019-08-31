<template>
<div class="col-12 col-md-4 col-lg-4  mt-5 w-100 h-100 my-5">

    <div class="main-div mb-3">
        <!-- <div class="">

            <div class="row  w-100 m-0 main-div justify-content-center" style="height: 30vh;z-index: 10;">
                <div class="col-sm-12 w-100 sub-div h-100 p-0" style="">
                    <div class="background-shadow w-100 h-100"></div>
                    <img src="/storage/images/4K_Wanted8.jpg" class="h-100" width="100%">
                </div>
                <div class="col-sm-12 sub-div h-100 w-100 p-0 d-flex flex-column justify-content-between">
                    <img class="m-3 align-self-end" src="/storage/stars.png" width="100px">
                    <h1 class="text-right  pr-5 title-text" style="color:white;">{{ shaleh_name }}
                            <p class="text-right pr-3 n-desc-color" style="font-size:0.5em;">{{ desc }}</p>
                    </h1>
                </div>
            </div>
             <div class="row w-100 m-0 justify-content-center mt-1 text-right" style="color:black;">
                <div class="col-sm-12 h-100 my-auto p-0 pr-3" style="border-bottom:1px solid #B9B9B9;">
                    <p class="desc-text">
                        <img src="/storage/icons/information.png" width="25px"/>
                    </p>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-12 col-md-4 col-lg-3 p-sm-1 col-sm-6 d-flex flex-column mt-5 align-items-center text-center w-100 h-100"> -->
            <div class=" w-100 h-75 d-flex flex-column align-items-center my-shadow" style="margin-bottom:5rem;">
                <div  :id="id" class="w-100 h-100 d-flex flex-column align-items-center"
                    style="z-index: 0;border-radius: 25%;">
                    <div :id="'carouselExampleControls'+this.id" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <img class="w-100 my-shadow" src="/storage/images/navbarBackground2.jpg" style="border-radius: 10px;">
                            </div>
                            <div class="carousel-item">
                                    <img class="w-100 my-shadow" src="/storage/images/navbarBackground2.jpg" style="border-radius: 10px;">
                            </div>
                            <div class="carousel-item">
                                    <img class="w-100 my-shadow" src="/storage/images/navbarBackground2.jpg" style="border-radius: 10px;">
                            </div>
                        </div>
                            <a class="carousel-control-prev" :href="'#carouselExampleControls'+this.id" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" :href="'#carouselExampleControls'+this.id" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <a class="position-absolute shadow-lg px-1 py-1 btn btn-secondary rounded" :href="shalehPage" target="_blank">صفحة الشاليه</a>
                </div>
                <div :id="id+'child'" @click="value ? show(id):hide(id)" class="position-absolute bg-light text-dark my-shadow"
                    style="z-index: 1;width: 95%;min-height: 100px;border-radius: 10px;top:80%;">
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-start align-items-start px-4 py-3">
                            <div>
                                <p class="bg-info px-2 rounded d-inline">مميز</p>
                                <p class="d-inline" style="color:lightgray">{{ shaleh.shaleh_desc }}</p>
                            </div>
                            <div class="mt-2">
                                <h5 class="font-weight-bold title-text">{{ shaleh.shaleh_name }}</h5>
                            </div>
                            <div class="mt-1">
                                <h5 class="font-weight-bold">{{ shaleh.normal_price }} ريال <span style="color:lightgray;">/ باليوم</span></h5>
                            </div>
                            <div class="mt-1 text-left">
                                <img width="80px" src="/storage/stars.png">
                                <p class="d-inline mt-3" style="color:lightgray;">34 تقييم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->


</template>
<style>

</style>
<script>
    export default {
        props:[
            'shaleh',
            // 'desc',
            'id',
            // 'price'
        ],
        data(){
            return {
                value:true
            }
        },
        methods:{
            show(id){
                let imgHeight = $('#'+id).height();
                let whiteHeight = $('#'+id+'child').height();
                var result = 0;
                if(imgHeight>whiteHeight)
                {
                    result = imgHeight / whiteHeight;
                    result *=0.18;
                    result = (result * whiteHeight);
                }else{
                    result = whiteHeight / imgHeight;
                }
                // console.log($('#'+id).height());
                // console.log($('#'+id+'child').height());
                // console.log('Sub : '+($('#'+id).height() - $('#'+id+'child').height()));
                $('#'+id+'child').finish();
                // $('#'+id).hide(1600);
                $('#'+id+'child').animate({
                    top:'105%',
                },function(){
                    $('#'+id).css('z-index','5');
                    $('#'+id+'child').animate({
                    top:result+'%',
                    });
                });
                this.value = false;
            },
            hide(id){
                // $('#'+id).hide(1600);
                $('#'+id+'child').finish();
                $('#'+id+'child').animate({
                    top:'105%',
                },function(){
                    $('#'+id).css('z-index','0');
                    $('#'+id+'child').animate({
                    top:'80%',
                    });
                });
                this.value = true;

            },
        },
        computed:{
            shalehPage:function(){
                return '/shaleh/'+this.id;
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
