<template>
<form id="addShalehForm" :action="route" method="post" class="shadow-lg container p-3 mb-2 rounded text-right" @submit.prevent="checkShaleh?onSubmit():editShaleh()">
    <input type="hidden" name="_token" :value="csrf">
    <personal-info @state_personal_info="state_personal_info($event)" :shaleh="this.shaleh?this.shaleh:'null'"></personal-info>
    <shaleh-info @state_shaleh_info="state_shaleh_info($event)" :shaleh="this.shaleh?this.shaleh:'null'"></shaleh-info>

    <div class="form-group">
        <h1 class="text-center">الخدمات</h1>
        <div class="row">
            <property-component v-for="(property,index) in properties" :key="property.id" :property="property" :property_shaleh="checkProperty(index)"></property-component>
        </div>
    </div>
    <map-info @state_map_info="state_map_info($event)" :cities="cities" :shaleh="this.shaleh?this.shaleh:'null'"></map-info>
    <price-info @state_price_info="state_price_info($event)" :shaleh="this.shaleh?this.shaleh:'null'"></price-info>

        <div id="priceInformation" class="form-group mt-5">
            <h1 class="text-center">صور الشاليه</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-12 col-sm-12 col-xs-4">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imgs" aria-describedby="inputGroupFileAddon01" @change="addImage" multiple accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="imgs"></label>
                        </div>
                    </div>
                    <div id="img-container" class="row">
                        <form-imgs v-for="img in imgs" :file="img" :key="img.name" @image-deleted="deleteImg($event)" :shaleh_id="shaleh?shaleh.id:'null'"></form-imgs>
                    </div>
                </div>
            </div>
        </div>
        <button v-if="checkShaleh" type="submit" class="btn btn-primary w-100 mt-5 bg-dark">اضافة شاليه</button>
        <button v-if="!checkShaleh" type="submit" class="btn btn-primary w-100 mt-5 bg-dark">تعديل الشاليه</button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header position-relative">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">{{ checkShaleh?'تمت الاضافة':'تم التعديل' }}</h5>
                    <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="left:0px;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ checkShaleh ? 'تم اضافة شاليه جديد بنجاح .. يمكنك الان التعديل و مشاهدة الشاليه من خدمات الموقع':'تم التعديل بنجاح .. يمكنك الان مشاهدة الشاليه من خدمات الموقع' }}</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary w-100" data-dismiss="modal" @click="redirect">حسنا</button>
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
        'csrf',
        'shaleh'
    ],
    data(){
        return{
            status:{
                personalInfo:false,
                shalehInfo:false,
                mapInfo:false,
                priceInfo:false,
            },
            message:'',
            imgs:this.shaleh != null?this.shaleh.imgs:[],
            addedImgs:[],
            deletedImgs:[]
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
        redirect:function(){
            document.location = '/admin/shalehate';
        },
        addImage:function(e){
            var tgt = e.target,
            files = tgt.files;
            if (FileReader && files && files.length && this.shaleh != null) {
                for (let index = 0; index < files.length; index++) {
                    this.addedImgs.push(files[index])
                    this.imgs.push(files[index])
                    }
                return;
            }

            if (FileReader && files && files.length) {
                for (let index = 0; index < files.length; index++) {
                    this.imgs.push(files[index])
                    }
                }
        },
        deleteImg:function(event)
        {
            if(this.shaleh != null){
                this.imgs.forEach((e)=>{
                    if(e.image_name == event){
                        this.deletedImgs.push(e);
                        return;
                    }
                });
                this.addedImgs = this.addedImgs.filter(img=>img.name!= event);
                return;
            }
            console.log('ds');
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
        editShaleh:function(){
             let myForm = new FormData($('#addShalehForm')[0]);
             if(this.deletedImgs.length !=0 || this.addedImgs.length !=0){
                this.deletedImgs.forEach(img=>myForm.append('deleted_imgs[]',img.image_name));
                this.addedImgs.forEach(img=>myForm.append('added_imgs[]',img,img.name));
             }
            axios.post('/admin/edit/shaleh/'+this.shaleh.id,myForm).then(function(response){
                console.log(response);
                $('.modal').modal('show');
            }).catch(function(error){
                console.log(error);
            });
        },
        checkProperty(index){
            let result =false;
            if(this.shaleh == null)
            return result;

            let property = this.shaleh.properties.forEach((e)=>{
                if(this.properties[index].id == e.property.id){
                     result = true;
                    return;
                }
            });
            return result;
        }
    },
    computed:{
        checkShaleh:function(){
            if(this.shaleh == null){
                return true;
            }else if(this.shaleh != null){
                return false;
            }
        }
    },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
