<template>
<div class="col-6 col-md-12 col-lg-12  w-100 h-100">
    <div class="d-flex flex-column justify-content-center align-items-center shadow-lg my-2 rounded">
        <div>
            <img class="w-100 my-shadow" src="/images/navbarBackground2.jpg">
        </div>
        <div>
            <p>{{ shaleh.shaleh_name }}</p>
        </div>
        <div>
            <p>{{ shaleh.city.name }}</p>
        </div>
        <div>
            <a class="btn btn-secondary" :href="/shaleh/+shaleh.id">صفحة الشاليه</a>
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
