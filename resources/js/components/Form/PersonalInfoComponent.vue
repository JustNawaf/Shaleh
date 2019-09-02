<template>
    <div id="personalInformation" class="container text-right" style="color:black;">
        <div class="form-group mt-5">
            <h1 class="text-center">البيانات الشخصية</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">الاسم الاول</label>
                    <input type="text" class="form-control" :class="first_name_state == null ? '':first_name_state? 'is-valid':'is-invalid'" name="first_name" v-model="first_name">
                    <div class="invalid-feedback" style="">
                        الرجاء كتابة الاسم الاول
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">الاسم الاخير</label>
                    <input type="text" class="form-control" name="last_name" :class="last_name_state == null ? '':last_name_state? 'is-valid':'is-invalid'" v-model="last_name">
                    <div class="invalid-feedback" style="">
                        الرجاء كتابة الاسم الاخير
                    </div>
                </div>

                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">رقم الجوال</label>
                    <input type="number" class="form-control" name="phone" :class="phone_state == null ? '':phone_state? 'is-valid':'is-invalid'" v-model="phone">
                    <div class="invalid-feedback" style="">
                        الرجاء كتابة رقم جوال صحيح
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">البريد الاكتروني</label>
                    <input type="email" class="form-control" name="email" :class="email_state == null ? '':email_state? 'is-valid':'is-invalid'" v-model="email">
                    <div class="invalid-feedback" style="">
                        الرجاء ادخال بريد الكتروني صحيح
                    </div>
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
            regex:{
                emailRegex:/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/igm,
                phoneRegex:/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/
            },
            first_name:'',
            first_name_state:null,
            last_name:'',
            last_name_state:null,
            phone:'',
            phone_state:null,
            email:'',
            email_state:null
        }
    },
  watch:{
      first_name:function(){
        //   alert('newVal');
          if(this.first_name == ''){
            this.first_name_state= false;
            this.checkState();
          }else{
            this.first_name_state= true;
            this.checkState();
          }
      },
      last_name:function(){
        //   alert('newVal');
          if(this.last_name == ''){
            this.last_name_state= false;
            this.checkState();
          }else{
            this.last_name_state= true;
            this.checkState();
          }
      },
      phone:function(){
        //   alert('newVal');
          if(this.phone.match(this.regex.phoneRegex)){
            this.phone_state= true;
            this.checkState();
          }else{
            this.phone_state= false;
            this.checkState();
          }
      },
      email:function(){
        //   alert('newVal');
          if(this.email.match(this.regex.emailRegex)){
            this.email_state= true;
            this.checkState();
          }else{
            this.email_state= false;
            this.checkState();
          }
      },
  },
  methods: {
      checkState:function(){
          if(this.first_name_state && this.last_name_state && this.phone_state && this.email_state){
              this.$emit('state_personal_info',true);
          }else{
            this.$emit('state_personal_info',false);
          }
      }
  },
};
</script>
