<template>
<div  class="form-group mt-5 col-md-3 col-4 d-flex flex-row justify-content-center align-content-center">
    <div class="col d-flex flex-column justify-content-center align-items-center">
        <i :class="[property.icon_name ,checked?'n-checkbox-shadow':'']" style="font-size:3rem;"></i>
        <p class="text-nowrap">{{ property.name }}</p>
        <input type="checkbox" :value="property.id" name="properites[]" @change="checked == false ? checked = true:checked = false" class="n-checkbox"/>
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
        'property',
        'property_shaleh'
    ],
    data(){
        return {
            checked:this.property_shaleh,
        }
    },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
