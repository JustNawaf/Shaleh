<template>
<form id="addShalehForm" :action="route" method="post" class="shadow-lg container p-3 mb-2 rounded text-right" @submit.prevent="onSubmit">
    <input type="hidden" name="_token" :value="csrf">

    <personal-info @state_personal_info="state_personal_info($event)"></personal-info>
    <shaleh-info @state_shaleh_info="state_shaleh_info($event)"></shaleh-info>

    <div class="form-group">
        <h1 class="text-center">الخدمات</h1>
        <div class="row">
            <property-component v-for="property in properties" :key="property.id" :property="property"></property-component>
        </div>
    </div>
    <map-info @state_map_info="state_map_info($event)" :cities="cities"></map-info>
    <price-info @state_price_info="state_price_info($event)"></price-info>

        <div id="priceInformation" class="form-group mt-5">
            <h1 class="text-center">صور الشاليه</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-12 col-sm-12 col-xs-4">
                    <div class="form-group">
                        <label for="exampleFormControlFile" class="float-right text-light">رفع الصور الخاصة بالشاليه</label>
                        <input type="file" class="form-control-file text-light" @change="addImage" multiple>
                    </div>
                    <div id="img-container" class="row">
                        <form-imgs v-for="img in imgs" :file="img" :key="img.name" @image-deleted="deleteImg($event)"></form-imgs>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-5 bg-dark">اضافة شاليه</button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header position-relative">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">تمت الاضافة</h5>
                    <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="left:0px;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    الان تستطيع من خلال حسابك ادارة الشاليهات الخاصة بك و تعديل بيانات متى ما شئت.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">حسنا</button>
                </div>
                </div>
            </div>
        </div>
</form>

</template>
<script>
export default {
    props:[
        'properties',
        'cities',
        'route',
        'csrf'
    ],
    data(){
        return{
            status:{
                personalInfo:false,
                shalehInfo:false,
                mapInfo:false,
                priceInfo:false,
            },
            imgs:[],
        }
    },
    methods:{
        state_personal_info:function(state){
            this.status.personalInfo=state;
        },
        state_shaleh_info:function(state){
            this.status.shalehInfo=state;
        },
        state_map_info:function(state){
            this.status.mapInfo=state;
        },
        state_price_info:function(state){
            this.status.priceInfo=state;
        },
        addImage:function(e){
            var tgt = e.target,
            files = tgt.files;
            if (FileReader && files && files.length) {
                for (let index = 0; index < files.length; index++) {
                    this.imgs.push(files[index])
                    }
                }
        },
        deleteImg:function(event)
        {
            this.imgs = this.imgs.filter(img=>img.name!= event);
            console.log(this.imgs.length);
        },
        onSubmit:function(){
             let myForm = new FormData($('#addShalehForm')[0]);
             if(this.imgs.length !=0){
                 this.imgs.forEach(img=>myForm.append('imgs[]',img,img.name));
             }
            console.log(myForm);
            axios.post(this.route,myForm).then(function(response){
                console.log(response);
                $('.modal').modal('show');
            }).catch(function(error){
                console.log(error);
            });
        },
    },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
