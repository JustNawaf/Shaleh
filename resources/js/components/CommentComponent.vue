<template>
    <div class="w-100  d-flex my-4 px-3 flex-column position-relative shadow-lg text-light" style="background-color:#636970;">
        <img width="100px" :src="'/star/'+comment.evaluation+'.png'" class="position-absolute" style="top:5%;left:1%;">
        <div class="row bg-dark px-3 py-3">
            <div class="col">
                <h1>{{ comment.user.name }}</h1>
            </div>
        </div>
        <div class="row bg-dark pb-2" style="margin-bottom:1px;">
            <div class="col">
                <p class="d-inline">{{ comment.created_at }}</p>
                <i class="far fa-calendar-alt text-light"></i>
            </div>
        </div>
        <div class="row bg-dark px-3 py-3">
            <div class="col">
                <p class="h3">التعليق : </p>
                <p class="h3 mx-2">{{ comment.description }}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:[
        'user',
        'comment'
    ],
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
