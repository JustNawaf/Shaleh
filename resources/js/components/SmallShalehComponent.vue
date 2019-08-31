<template>
<div class="col-6 col-md-12 col-lg-12  w-100 h-100">
    <div class="d-flex flex-column justify-content-center align-items-center shadow-lg my-2 rounded">
        <div>
            <img class="w-100 my-shadow" src="/storage/images/navbarBackground2.jpg">
        </div>
        <div>
            <p>{{ shaleh.shaleh_name }}</p>
        </div>
        <div>
            <p>{{ shaleh.city.name }}</p>
            <!-- <p style="color:lightgray;">الوصف وسكيبشسطكيبوطشسكيموبطمك</p> -->
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
