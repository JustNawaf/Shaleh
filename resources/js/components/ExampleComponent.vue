<template>
<div  v-if="this.deleted == null" class="col-12 col-md-4 col-lg-4  mt-5 w-100 h-100 my-5">
    <p>{{  }}</p>
    <div class="main-div mb-3">
            <div class=" w-100 h-75 d-flex flex-column align-items-center my-shadow" style="margin-bottom:5rem;">
                <div  :id="this.id" class="w-100 h-100 d-flex flex-column align-items-center position-relative"
                    style="z-index: 0;">
                    <div :id="'controlImage'+this.id" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 10px;">
                            <div class="carousel-item active" style="border-radius: 10px;">
                                <img class="d-block my-shadow img" :src="'/storage/shalehat_images/'+this.id+'/'+this.imgs[0].image_name">
                            </div>
                            <div class="carousel-item"  v-for="img in imgs.slice(1)" :key="img.id" style="border-radius: 10px;">
                                <img  class="d-block img my-shadow" :src="'/storage/shalehat_images/'+img.shaleh_id+'/'+img.image_name">
                            </div>
                            <a class="carousel-control-prev" :href="'#controlImage'+this.id" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" :href="'#controlImage'+this.id" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        </div>
                        <div class="position-absolute w-100" style="top:-30px;">
                            <div class="row m-0 p-0 w-100">
                                <div :class="checkUser ? 'col-8 col-md-10 col-lg-10':'col-12 col-md-12 col-lg-12'" style="z-index:0;">
                                    <a class=" shadow-lg px-1 py-1 btn btn-dark w-100" :href="shalehPage">صفحة الشاليه</a>
                                </div>
                                <div v-if="checkUser" class="col-4 col-md-2 col-lg-2  p-0 m-0">
                                    <div class="row w-100 p-0 m-0 d-flex flex-row justify-content-between">
                                        <div  class="shadow-lg text-dark">
                                            <a class="bg-transparent border-0" :href="'/admin/update/shaleh/'+this.shaleh.id"><i class="far fa-edit text-dark icon"></i></a>
                                        </div>
                                        <div class="shadow-lg text-dark">
                                           <button @click="deleteShaleh()" class="bg-transparent border-0"> <i class="fas fa-trash-alt text-danger icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="this.spinner" class="w-100 h-100 position-absolute d-flex align-items-center justify-content-center" style="z-index:55;">
                            <div class="spinner-border" role="status" >
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    <!-- <a class="position-absolute shadow-lg p-0 m-0 btn btn-dark" :href="shalehPage" target="_blank" style="top:0px;left:15px;;z-index:2;border-radius:25%;">
                        <i class="far fa-edit text-light" style="font-size:2rem;"></i>
                    </a> -->
                </div>
                <div :id="id+'child'" @click="value ? show(id):hide(id)" class="position-absolute bg-light text-dark my-shadow"
                    style="z-index: 1;width: 95%;min-height: 100px;border-radius: 10px;top:80%;">
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-start align-items-start px-4 py-3">
                            <div>
                                <p class="px-2 rounded d-inline" :class="classType">{{ type }}</p>
                                <!-- <p class="d-inline" style="color:lightgray">{{ shaleh.shaleh_desc }}</p> -->
                            </div>
                            <div class="mt-2">
                                <h5 class="font-weight-bold title-text">{{ shaleh.shaleh_name }}</h5>
                            </div>
                            <div class="mt-1">
                                <h5 class="font-weight-bold">{{ shaleh.normal_price }} ريال <span style="color:lightgray;">/ باليوم</span></h5>
                            </div>
                            <div class="mt-1 text-left">
                                <img width="80px" :src="'/star/'+rating+'.png'">
                                <p class="d-inline mt-3" style="color:lightgray;">{{ totalComments }} تقييمات</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->


</template>
<script>
    export default {
        props:[
            'shaleh',
            // 'desc',
            'id',
            'imgs',
            'current_user'
            // 'price'
        ],
        data(){
            return {
                value:true,
                type:'',
                classType:'',
                deleted:null,
                spinner:false,
            }
        },
        created(){
            this.spinner=true;
        },
        mounted() {
            this.spinner=false;
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
            deleteShaleh(){
                this.spinner=true;
                axios.post('/admin/delete/shaleh/'+this.shaleh.id).then((response)=>{
                    this.spinner=false;
                this.deleted = response.data;
                // $('.modal').modal('show');
                }).catch(function(error){
                    console.log(error);
                });
            }
        },
        computed:{
            shalehPage:function(){
                return '/shaleh/'+this.id;
            },
            totalComments:function(){
                return this.shaleh.comments.length;
            },
            checkUser:function(){
                if(this.shaleh.user_id == this.current_user){
                    return true;
                }
                return false;
            },
            rating:function(){
                let rating = 0;
                let totalRating = this.shaleh.comments.length *5;
                let result = null;
                this.shaleh.comments.forEach((e)=>{
                    if(e.evaluation == 1)
                    {
                        rating += 1;
                    }else if(e.evaluation == 2){
                        rating += 2;
                    }
                    else if(e.evaluation == 3){
                        rating += 3;
                    }
                    else if(e.evaluation == 4){
                        rating += 4;
                    }
                    else if(e.evaluation == 5){
                        rating += 5;
                    }
                });
                if(totalRating == 0){
                    this.type='مجهول';
                    this.classType='bg-dark text-light';
                    return 0;
                }
                result = Math.round((rating/totalRating) * 5);
                if(result == 1){
                    this.type='مقبول';
                    this.classType='bg-info text-light';
                }else if(result == 2){
                    this.type='جيد';
                    this.classType='bg-primary text-light';
                }else if(result == 3){
                    this.type='جيد جدا';
                    this.classType='bg-secondary text-light';
                }
                else if(result == 4){
                    this.type = 'ممتاز';
                    this.classType='bg-warning text-dark';
                }else{
                    this.type='مميز';
                    this.classType='bg-success text-light';
                }
                return result;
            }
        },

    }
</script>
