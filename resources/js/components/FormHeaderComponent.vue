<template>
<div  class="form-group mt-5 col-md-3 col-4 d-flex flex-row justify-content-center align-content-center"
    onclick="show(this)">
    <div class="col d-flex flex-column justify-content-center align-items-center">
        <i :class="property.icon_name" style="font-size:50px;"></i>
        <p class="text-nowrap">{{ property.name }}</p>
        <input type="checkbox" :value="property.id" name="properites[]" class="n-checkbox" />
</div>
</div>
</template>
<style>
.n-checkbox {
  position: absolute;
  height: 100%;
  width: 100%;
  opacity: 0;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
}
.n-checkbox-shadow{
color:green;
}
</style>
<script>
export default {
    props:[
        'name'
    ],
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
       show:function(value){
        //    $('#fan-checkbox').props('checked');
        //    $('#fan').removeClass('n-checkbox-shadow');
        if(value == 'fan')
        {
        $(this).find('i').addClass('n-checkbox-shadow');

        }
        // $(this).find('p').addClass('n-checkbox-shadow');
      }
  },

};
</script>
