<template>
<div class="col-12 col-md-12 col-lg-12  w-100 h-100 rounded">
    <div class="d-flex flex-column justify-content-center align-items-center my-2 rounded my-shadow" style="background-color:#636970;">
        <div class=" rounded">
            <img class="w-100 img" :src="'/storage/shalehat_images/'+shaleh.id+'/'+shaleh.imgs[0].image_name">
        </div>
        <div class="p-1 rounded w-100 text-center">
            <p class="h3 text-light ">{{ shaleh.shaleh_name }}</p>
            <p class="h3 text-light ">{{ shaleh.city.name }}</p>
            <a class="btn btn-light w-100" :href="/shaleh/+shaleh.id">صفحة الشاليه</a>
        </div>
    </div>
</div>


</template>
<script>
    export default {
        props:[
            'shaleh',
        ],
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
