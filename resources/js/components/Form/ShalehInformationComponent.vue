<template>
    <div id="shalehInformation" class="container  text-right mt-5" style="color:black;;">

        <h1 class="text-center">معلومات الشاليه</h1>
        <div class="form-group pt-3">
            <label for="inputName">اسم الشاليه</label>
            <input type="text" class="form-control" name="shaleh_name" :class="shaleh_name_state == null ? '':shaleh_name_state? 'is-valid':'is-invalid'" v-model="shaleh_name">
            <div class="invalid-feedback" style="">
                الرجاء كتابة اسم الشاليه
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="">الوصف</label>
                <textarea class="form-control" name="shaleh_desc" :class="shaleh_desc_state == null ? '':shaleh_desc_state? 'is-valid':'is-invalid'" v-model="shaleh_desc" rows="3"></textarea>
                <div class="invalid-feedback" style="">
                    الرجاء كتابة الوصف للشاليه
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
      props:[
        'shaleh'
    ],
      data(){
        return{
            shaleh_name:this.shaleh.shaleh_name != null?this.shaleh.shaleh_name:'',
            shaleh_name_state:this.shaleh.shaleh_name != null?true:null,
            shaleh_desc:this.shaleh.shaleh_desc != null?this.shaleh.shaleh_desc:'',
            shaleh_desc_state:this.shaleh.shaleh_desc != null?true:null,
        }
    },
  watch:{
      shaleh_name:function(){
          if(this.shaleh_name == ''){
            this.shaleh_name_state= false;
            this.checkState();
          }else{
            this.shaleh_name_state= true;
            this.checkState();
          }
      },
      shaleh_desc:function(){
          if(this.shaleh_desc == ''){
            this.shaleh_desc_state= false;
            this.checkState();
          }else{
            this.shaleh_desc_state= true;
            this.checkState();
          }
      },
    },
    methods: {
      checkState:function(){
          if(this.shaleh_name_state && this.shaleh_desc_state){
              this.$emit('state_shaleh_info',true);
          }else{
            this.$emit('state_shaleh_info',false);
          }
      }
  }
};
</script>
