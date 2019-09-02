<template>
    <div id="priceInformation" class="form-group mt-5">
        <h1 class="text-center">الأسعار</h1>
        <div class="row pt-3">
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="normal_price">السعر في اليوم العادي</label>
                <input type="number" class="form-control" name="normal_price" :class="price_normal_state == null ? '':price_normal_state? 'is-valid':'is-invalid'" v-model="price_normal">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة سعر الشاليه في اليوم العادي
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="ramadan_price">السعر في رمضان</label>
                <input type="number" class="form-control" name="ramadan_price" :class="price_ramadan_state == null ? '':price_ramadan_state? 'is-valid':'is-invalid'" v-model="price_ramadan">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة سعر الشاليه في شهر رمضان
                </div>
            </div>

            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="ftr_price">السعر في عيد الفطر</label>
                <input type="number" class="form-control" name="ftr_price" :class="price_ftr_state == null ? '':price_ftr_state? 'is-valid':'is-invalid'" v-model="price_ftr">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة السعر في عيد الفطر
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="adha_price">السعر في عيد الاضحى</label>
                <input type="number" class="form-control" name="adha_price" :class="price_adha_state == null ? '':price_adha_state? 'is-valid':'is-invalid'" v-model="price_adha">
                <div class="invalid-feedback" style="">
                    الرجاء كتابة السعر في عيد الاضحى
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
      data(){
        return{
            price_normal:'',
            price_normal_state:null,
            price_ramadan:'',
            price_ramadan_state:null,
            price_ftr:'',
            price_ftr_state:null,
            price_adha:'',
            price_adha_state:null,

        }
    },
  watch:{
      price_normal:function(){
          if(this.price_normal == ''){
            this.price_normal_state= false;
            this.checkState();
          }else{
            this.price_normal_state= true;
            this.checkState();
          }
      },
      price_ramadan:function(){
          if(this.price_ramadan == ''){
            this.price_ramadan_state= false;
            this.checkState();
          }else{
            this.price_ramadan_state= true;
            this.checkState();
          }
      },
      price_ftr:function(){
          if(this.price_ftr == ''){
            this.price_ftr_state= false;
            this.checkState();
          }else{
            this.price_ftr_state= true;
            this.checkState();
          }
      },
      price_adha:function(){
          if(this.price_adha == ''){
            this.price_adha_state= false;
            this.checkState();
          }else{
            this.price_adha_state= true;
            this.checkState();
          }
      },
    },
    methods: {
      checkState:function(){
          if(this.price_normal_state && this.price_ramadan_state && this.price_ftr_state && this.price_adha_state){
              this.$emit('state_price_info',true);
          }else{
            this.$emit('state_price_info',false);
          }
      }
  }
};
</script>
