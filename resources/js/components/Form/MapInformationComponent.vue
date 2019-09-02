<template>
    <div id="mapInformation" class="form-group mt-5">
        <h1 class="text-center">معلومات الموقع</h1>
        <div class="row pt-3">
            <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                <label for="inputName">المدينة</label>
                <select class="form-control is-valid" name="city_id">
                    <option v-for="city in cities" :value="city.id" :key="city.id">{{ city.name }}</option>
                </select>
            </div>
            <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                <label for="area">الحي</label>
                <input type="text" class="form-control" name="area" :class="area_state == null ? '':area_state? 'is-valid':'is-invalid'" v-model="area">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة اسم الحي
                </div>
            </div>

            <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                <label for="street">الشارع</label>
                <input type="text" class="form-control" name="street" :class="street_state == null ? '':street_state? 'is-valid':'is-invalid'" v-model="street">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة اسم الشارع
                </div>
            </div>
        </div>
        </div>
</template>
<script>
export default {
    props:[
        'cities'
    ],
  mounted() {
    console.log("Component mounted.");
  },
      data(){
        return{
            area:'',
            area_state:null,
            street:'',
            street_state:null,
        }
    },
  watch:{
      area:function(){
          if(this.area == ''){
            this.area_state= false;
            this.checkState();
          }else{
            this.area_state= true;
            this.checkState();
          }
      },
      street:function(){
          if(this.street == ''){
            this.street_state= false;
            this.checkState();
          }else{
            this.street_state= true;
            this.checkState();
          }
      },
    },
    methods: {
      checkState:function(){
          if(this.area_state && this.street_state){
            this.$emit('state_map_info',true);
          }else{
            this.$emit('state_map_info',false);
          }
      }
  }
};
</script>
