@extends('layouts.app')

@section('content')

<div id="add-shaleh">
    <div class="container d-flex bg-dark text-light mt-3 p-2 justify-content-center align-items-center"  style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom-left-radius: 25%px;">
        <h1>اضافة شاليه</h1>
    </div>
    <add-shaleh-form :properties="{{ $properties }}" :cities="{{ $cities }}" route="{{ route('admin.store.shaleh') }}" csrf="{{ Session::token() }}"></add-shaleh-form>
</div>
{{-- <div class="container d-flex flex-row w-100 mt-5">
    <div id="1" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:#BEBEBE;color:black;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">1</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid green;width: 150px;">
    </div>
    <div id="2" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">2</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="3" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">3</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="4" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:red;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">4</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="5" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:green;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">5</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="6" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">6</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="7" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:black;;width:65px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">7</b>
    </div>

</div> --}}
{{-- <form id="addShalehForm" onsubmit="submit(event)" action="{{ route('admin.store.shaleh') }}" method="post" class="shadow-lg container p-3 mt-5 rounded">
    @csrf
    <div id="personalInformation" class="container text-right" style="color:black;">
        <div class="form-group mt-5">
            <h1 class="text-center">البيانات الشخصية</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">الاسم الاول</label>
                    <input type="text" class="form-control is-valid" name="first_name" id="first_name">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">الاسم الاخير</label>
                    <input type="text" class="form-control is-valid" name="last_name" id="last_name">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>

                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">رقم الجوال</label>
                    <input type="number" class="form-control is-valid" name="phone" id="phone">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="inputName">البريد الاكتروني</label>
                    <input type="email" class="form-control is-valid" name="email" id="email">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div id="shalehInformation" class="container  text-right mt-5" style="color:black;;">

        <h1 class="text-center">معلومات الشاليه</h1>
        <div class="form-group pt-3">
            <label for="inputName">اسم الشاليه</label>
            <input type="text" class="form-control is-valid" name="shaleh_name" id="shaleh_name">
            <div class="invalid-feedback" style="">
                Validation message
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="">الوصف</label>
                <textarea class="form-control is-valid" name="shaleh_desc" id="shaleh_desc" rows="3"></textarea>
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
        </div>

        <div class="form-group">
            <h1 class="text-center">الخدمات</h1>
            <div class="row">
                @foreach ($properties as $property)
                <div class="form-group mt-5 col-md-3 col-4 d-flex flex-row justify-content-center align-content-center"
                    onclick="show(this)">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <i class="{{ $property->icon_name }}" style="font-size:50px;"></i>
                        <p>{{ $property->name }}</p>
                        <input type="checkbox" value="{{ $property->id }}" name="properites[]" class="n-checkbox" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="mapInformation" class="form-group mt-5">
            <h1 class="text-center">معلومات الموقع</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                    <label for="inputName">المدينة</label>
                    <select class="form-control is-valid" name="city_id">
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                    <label for="area">الحي</label>
                    <input type="text" class="form-control is-valid" name="area" id="area">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>

                <div class="col-12 w-100 col-md-4 col-sm-12 col-xs-4">
                    <label for="street">الشارع</label>
                    <input type="text" class="form-control is-valid" name="street" id="street">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
            </div>
        </div>
        <div id="priceInformation" class="form-group mt-5">
            <h1 class="text-center">الأسعار</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="normal_price">السعر في اليوم العادي</label>
                    <input type="text" class="form-control is-valid" name="normal_price" id="normal_price">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="ramadan_price">السعر في رمضان</label>
                    <input type="text" class="form-control is-valid" name="ramadan_price" id="ramadan_price">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>

                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="ftr_price">السعر في عيد الفطر</label>
                    <input type="text" class="form-control is-valid" name="ftr_price" id="ftr_price">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
                <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                    <label for="adha_price">السعر في عيد الاضحى</label>
                    <input type="text" class="form-control is-valid" name="adha_price" id="adha_price">
                    <div class="invalid-feedback" style="">
                        Validation message
                    </div>
                </div>
            </div>

            {{-- <button type="submit" class="btn btn-primary w-100 mt-5 bg-dark">اضافة شاليه</button> --}}
        {{-- </div>
        <div id="priceInformation" class="form-group mt-5">
            <h1 class="text-center">صور الشاليه</h1>
            <div class="row pt-3">
                <div class="col-12 w-100 col-md-12 col-sm-12 col-xs-4">
                    <div class="form-group">
                        <label for="exampleFormControlFile" class="float-right text-light">رفع الصور الخاصة بالشاليه</label>
                        <input type="file" class="form-control-file text-light" id="exampleFormControlFile" multiple>
                    </div>
                        <div id="img-container" class="row">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-5 bg-dark" onclick="get();">اضافة شاليه</button>
        </div>
    </div>
    </div> --}}
    {{-- <div class="container min-vh-100 bg-dark">

    </div> --}}
</form>


<script>
    new Vue({
        el:'#add-shaleh'
    });
    // function submit(e){
    //     e.preventDefault();
    // }
    // function get(){
    //     var x = new FormData($('#addShalehForm')[0]);
    //     x.append('hel[]','123123');
    //     x.append('hel[]','123123');
    //     x.append('hel[]','123123');
    //     x.append('hel[]','123123');


    //     console.log(x);
    // }
    var imgs = [];
    $('#exampleFormControlFile').change(function(e){
        var tgt = e.target,
        files = tgt.files;

    if (FileReader && files && files.length) {
        for (let index = 0; index < files.length; index++) {
            imgs.push(files[index])
            setupReader(files[index]);
            }
        }
    });
    function setupReader(file) {
        var name = file.name;
        var reader = new FileReader();


        reader.onload = function (e) {
                // document.getElementById('myimage').src = fr.result;
                let s = '<div class="w-100 h-50 py-2 px-2 col-6 col-md-3">';
                s+='<button type="button" class="position-absolute btn btn-danger text-light mr-1 p-1"';
                s+=`style="background-color:red;" onclick="deleteImg(this)">حذف</button>`;
                s+=`<img class="w-100 h-100 img-responsive rounded" src="${reader.result}" data-name="${file.name}">`;
                s+=`<p class="text-center text-light pt-3">${file.name}</p>`;
                s+='</div>';

                $('#img-container').append(s);

            }
            reader.readAsDataURL(file);

        }

    // Not supported
    // else {
    //     // fallback -- perhaps submit the input to an iframe and temporarily store
    //     // them on the server until the user's session ends.
    // }
    // })
    function deleteImg(div)
    {
        imgs = imgs.filter(img=>img.name.trim()!= $(div).next().data('name').trim());
        console.log(imgs);
        if(imgs.length == 0 )
        {
            $('#exampleFormControlFile').val('');
        }
        // $('#exampleFormControlFile').toArray()[0].files[0].name = 'ASDasd';
        // return console.log($('#exampleFormControlFile').toArray()[0].files);
        $(div).parent().remove();
    }
    // new Vue({
    //     el:'#personalInformation',
    //     data: {
    //         key: 'information'
    //     },
    //   });
    //   new Vue({
    //     el:'#shalehInformation',
    //     data: {
    //         key: 'information'
    //     },
    //   });
    //   new Vue({
    //     el:'#mapInformation',
    //     data: {
    //         key: 'information'
    //     },
    //   });
    //   new Vue({
    //     el:'#priceInformation',
    //     data: {
    //         key: 'information'
    //     },
    //   });
    $('#1').click(function(){
        alert('1');

    });
    $('#1').tooltip();

    $('#2').click(function(){
        alert('2');
    });
    $('#2').tooltip();
    $('#3').click(function(){
        alert('3');
    });
    $('#3').tooltip();
    $('#4').click(function(){
        alert('4');
    });
    $('#4').tooltip();
    $('#5').click(function(){
        alert('5');
    });
    $('#5').tooltip();
    $('#6').click(function(){
        alert('6');
    });
    $('#6').tooltip();
    $('#7').click(function(){
        alert('7');
    });
    $('#7').tooltip();
    function show(div){
        //    $('#fan-checkbox').props('checked');
        //    $('#fan').removeClass('n-checkbox-shadow');
        var ss = $(div).find('input:checkbox:first').is(":checked");
        if(ss == false)
        {
            $(div).find('i').removeClass('n-checkbox-shadow');
        }else{
            $(div).find('i').addClass('n-checkbox-shadow');

        }

        // $(this).find('p').addClass('n-checkbox-shadow');
      }

</script>
@endsection
