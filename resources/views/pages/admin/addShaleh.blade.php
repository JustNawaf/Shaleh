@extends('layouts.app')

@section('content')

<div class="container d-flex flex-row w-100">
    <div id="1" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:#BEBEBE;color:black;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">1</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid green;width: 150px;">
    </div>
    <div id="2" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">2</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="3" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">3</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="4" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:red;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">4</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="5" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:green;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">5</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="6" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">6</b>
    </div>
    <div class="align-self-center" style="border-top:3px solid black;width: 150px;">
    </div>
    <div id="7" class="d-flex flex-row justify-content-center align-items-center" data-toggle="tooltip"
        data-placement="top" title="المعلومات الشخصية"
        style="background:black;color:white;width: 50px;height:50px;border-radius: 50%;cursor: pointer;">
        <b class="text-center" style="height:fit-content">7</b>
    </div>

</div>

<div class="container text-right" style="color:white">
    <div class="form-group mt-5">
        <h1 class="text-center">معلومات عن صاحب الشاليه</h1>
        <div class="row pt-3">
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">الاسم الاول</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">الاسم الاخير</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>

            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">رقم الجوال</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">البريد الاكتروني</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
        </div>
    </div>

</div>



<div class="container  text-right mt-5" style="color:white;">

    <h1 class="text-center">اضافة الشاليه</h1>
    <div class="form-group pt-3">
        <label for="inputName">اسم الشاليه</label>
        <input type="text" class="form-control is-valid" name="inputName" id="inputName">
        <div class="invalid-feedback" style="">
            Validation message
        </div>
    </div>

    <div class="form-group">
        <div class="form-group">
            <label for="">الوصف</label>
            <textarea class="form-control is-valid" name="" id="" rows="3"></textarea>
            <div class="invalid-feedback" style="">
                Validation message
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-group">
            <label for="">الموقع</label>
            <textarea class="form-control is-valid" name="" id="" rows="3"></textarea>
            <div class="invalid-feedback" style="">
                Validation message
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputName">الجودة من 5 نجوم</label>
        <input type="text" class="form-control is-valid" name="inputName" id="inputName">
        <div class="invalid-feedback" style="">
            Validation message
        </div>
    </div>

    <div class="form-group">
        <h1 class="text-center">الخدمات</h1>
        <div class="row">
            <div class="form-group mt-5 col d-flex flex-row justify-content-center align-content-center"
                onclick="show(this)">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-fan" style="font-size:50px;"></i>
                    <p>مكيف</p>
                    <input type="checkbox" class="n-checkbox" />
                </div>
            </div>

            <div class="form-group mt-5 col d-flex flex-row justify-content-center align-content-center"
                onclick="show(this)">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-bath" style="font-size:50px;"></i>
                    <p>دورة مياه</p>
                    <input type="checkbox" class="n-checkbox" />
                </div>
            </div>

            <div class="form-group mt-5 col d-flex flex-row justify-content-center align-content-center"
                onclick="show(this)">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-bath" style="font-size:50px;"></i>
                    <p>مكيف</p>
                    <input type="checkbox" class="n-checkbox" />
                </div>
            </div>
        </div>
    </div>

    <div class="form-group mt-5">
        <h1 class="text-center">معلومات الموقع</h1>
        <div class="row pt-3">
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في اليوم العادي</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في رمضان</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>

            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في عيد الفطر</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في عيد الاضحى</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
        </div>
    </div>
    <div class="form-group mt-5">
        <h1 class="text-center">الأسعار</h1>
        <div class="row pt-3">
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في اليوم العادي</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في رمضان</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>

            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في عيد الفطر</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
            <div class="col-12 w-100 col-md-3 col-sm-12 col-xs-4">
                <label for="inputName">السعر في عيد الاضحى</label>
                <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                <div class="invalid-feedback" style="">
                    Validation message
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-5 bg-dark">اضافة شاليه</button>
    </div>
</div>
</div>
<script>
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
