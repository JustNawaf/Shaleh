<template>
    <div class="w-100 border-dark d-flex my-4 px-3 flex-column position-relative shadow-lg">
        <img width="100px" :src="'/storage/star/'+comment.evaluation+'.png'" class="position-absolute" style="top:5%;left:1%;">
        <div class="align-self-start">
            <h1>{{ comment.user.name }}</h1>
        </div>
        <div class="align-self-start">
            <p class="mx-2">{{ comment.description }}</p>
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
