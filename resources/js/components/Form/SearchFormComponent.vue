<template>
    <form id="search_shaleh" @submit.prevent="search" :action="route" method="POST">
        <div class="text-right">
            <small class="text-danger" v-if="errorSearch">لقد حصل خطأ اثناء عملية البحث , الرجاء المحاولة مره اخرى</small>
            <div class="form-group">
                <label for="exampleInputEmail1">اسم الشاليه</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="shaleh_name" aria-describedby="emailHelp"
                    placeholder="اسم الشاليه">
                <small id="emailHelp" class="form-text text-muted">الرجاء وضع اسم شاليه واضح حتى تتم عملية البحث</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">الرجاء تحديد المنطقة</label>
                <select class="form-control" name="city_id">
                    <option value="all">الكل</option>
                    <option v-for="city in cities" :value="city.id" :key="city.id">{{ city.name }}</option>
                </select>
                <small id="emailHelp" class="form-text text-muted">الرجاء تحديد المنطقة المراد البحث بها</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تحديد الاسعار</label>
                <select class="form-control" name="price_order">
                    <option value="DESC">تصاعدي</option>
                    <option value="ASC">تنازلي</option>
                </select>
                <small id="emailHelp" class="form-text text-muted">الرجاء اختيار الاسعار تصاعديا او تنازليا</small>
            </div>
            <button type="submit" class="btn btn-secondary w-100">بحث</button>
        </div>
    </form>
</template>
<script>
export default {
    props:[
        'cities',
        'route'
    ],
    mounted() {
        console.log("Component mounted.");
    },
    data(){
        return{
            errorSearch:false,
        }
    },

    methods: {
      search:function(){
        let data = new FormData($('#search_shaleh')[0]);
        axios.post(this.route,data).then((response)=>{
            console.log(response.data)
            this.errorSearch=false;
            this.$emit('shalehat',response.data);
        }).catch((error)=>{
            this.errorSearch=true;
        });
      }
  }
};
</script>
