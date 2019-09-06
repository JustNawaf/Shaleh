<template>
    <div  v-if="show" class="w-100 h-50 py-2 px-2 col-6 col-md-3">
        <button type="button" class="position-absolute btn btn-danger text-light mr-1 p-1" style="background-color:red;z-index:5;" @click="deleteImg">حذف</button>
        <img class="w-100 h-100 img rounded" :src="getSrc">
    </div>
</template>
<script>
export default {
    props:[
        'file',
        'shaleh_id'
    ],
  mounted() {
    console.log("Component mounted.");
  },
      data(){
        return{
            show:true
        }
    },
    computed: {
        getSrc:function(){
            // return console.log(this.file);
            if(!("size" in this.file)){
                return '/storage/shalehat_images/'+this.shaleh_id+'/'+this.file.image_name;
            }
            return URL.createObjectURL(this.file);
        },
        getName:function(){
            if(!("size" in this.file)){
                return this.file.image_name;
            }
            return this.file.name;
        }
    },
    methods: {
      checkState:function(){
          if(this.shaleh_name_state && this.shaleh_desc_state){
              this.$emit('state_shaleh_info',true);
          }else{
            this.$emit('state_shaleh_info',false);
          }
      },
        deleteImg:function()
        {
            this.$emit('image-deleted',this.getName);
            this.show=false;
        },
  }
};
</script>
