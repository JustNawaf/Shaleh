@extends('layouts.app')

@section('content')
<div class="container mt-5 text-right" style="color:white;">
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
        <label for="inputName">الخدمات</label>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">مكيف</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">حمام</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">نطبخ</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">سرير</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">غرفة خادمة</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">غرفة نوم اضافية</label>
        </div>
    </div>
    <div class="form-group mt-5">
        <h1 class="text-center">معلومات شخصية</h1>
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
        @endsection