<template>
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
            <div class=" w-100 h-75 d-flex flex-column align-items-center">
                <div class="w-100 h-100"
                    style="z-index: 0;border-radius: 25%;box-shadow: 2px 6px 18px 1px rgba(0,0,0,1);">
                    <img class="w-100" src="/storage/images/navbarBackground2.jpg" style="border-radius: 10px;">
                </div>
                <div class="h-25 bg-light text-dark"
                    style="z-index: 1;margin-top: -10%;width: 95%;min-height: 100px;border-radius: 10px;box-shadow: 2px 6px 18px 1px rgba(0,0,0,1);">
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-start align-items-start px-4 py-3">
                            <div>
                                <p class="bg-info px-2 rounded d-inline">مميز</p>
                                <p class="d-inline" style="color:lightgray">3 اسرة - 10 دورات مياه - مسبح ياشيخ جيد صح</p>
                            </div>
                            <div class="mt-2">
                                <h5 class="font-weight-bold">شاليه يعم بطيش الشباب</h5>
                            </div>
                            <div class="mt-1">
                                <h5 class="font-weight-bold">500 ريال <span style="color:lightgray;">/ باليوم</span></h5>
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
    <!-- </div> -->


</template>

<script>
    export default {
        props:[
            'shaleh_name',
            'desc'
        ],
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
