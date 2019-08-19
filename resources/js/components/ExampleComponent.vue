<template>
    <div class="main-div  my-shadow mb-3" style="background-color:white;">
        <div class="">

            <div class="row  w-100 m-0 main-div justify-content-center" style="height: 30vh;z-index: 10;">
                <div class="col-sm-12 w-100 sub-div h-100 p-0" style="">
                    <div class="background-shadow w-100 h-100"></div>
                    <img src="/storage/images/4K_Wanted8.jpg" class="h-100" width="100%">
                </div>
                <div class="col-sm-12 sub-div h-100 w-100 p-0 d-flex flex-column justify-content-between">
                    <img class="m-3 align-self-end" src="/storage/stars.png" width="100px">
                    <h1 class="text-right  pr-5 pb-3 title-text" style="color:white;">{{ name }}</h1>
                </div>
            </div>
             <div class="row w-100 m-0 justify-content-center mt-1 text-right" style="color:black;">
                <div class="col-sm-12 h-100 my-auto p-0 pr-3" style="border-bottom:1px solid #B9B9B9;">
                    <p class="desc-text">
                        <img src="/storage/icons/information.png" width="25px"/>
                    </p>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        props:[
            'name'
        ],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
