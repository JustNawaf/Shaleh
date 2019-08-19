@extends('layouts.app')

@section('content')
{{-- <div class="container mt-5 bg-light text-right">



    <div class="p-5">
        <form action="">
            <div class="form-group mt-5">
                <h1 class="text-center">تسجيل حساب جديد</h1>

                <div class="d-flex flex-row justify-content-around py-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="normalUserRole" name="roleUser" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="normalUserRole">مستثمر</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="businessUserRole" name="roleUser" class="custom-control-input"
                            value="3">
                        <label class="custom-control-label" for="businessUserRole">مستخدم عادي</label>
                    </div>
                </div> --}}

                {{-- Business User --}}

                {{-- <div id="businessUser"  style="display:none;">
                    <div class="row pt-3">
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4">
                            <label for="inputName">الاسم</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                الرجاء ادخال اسم صحيح
                            </div>
                        </div>
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4">
                            <div class="row">
                                <div class="col">
                                    <label for="inputName">البريد الاكتروني</label>
                                    <input type="email" class="form-control is-valid" name="inputName" id="inputName">
                                    <div class="invalid-feedback" style="">
                                        الرجاء ادخال بريد الكتروني صحيحس
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="inputName">تأكيد البريد الاكتروني</label>
                                    <input type="email" class="form-control is-valid" name="inputName" id="inputName">
                                    <div class="invalid-feedback" style="">
                                        الرجاء ادخال بريد الكتروني صحيحس
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4 pt-5">
                            <label for="inputName">كلمة المرور</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                Validation message
                            </div>
                        </div>
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4 pt-5">
                            <label for="inputName">تأكيد كلمة المرور</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                Validation message
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-5 bg-dark">تسجيل حساب جديد</button>
                </div> --}}

                {{-- Normal User --}}

                {{-- <div id="normalUser" style="display:none;">
                    <div class="row pt-3">
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4">
                            <label for="inputName">الاسم</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                الرجاء ادخال اسم صحيح
                            </div>
                        </div>
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4">
                            <div class="row">
                                <div class="col">
                                    <label for="inputName">البريد الاكتروني</label>
                                    <input type="email" class="form-control is-valid" name="inputName" id="inputName">
                                    <div class="invalid-feedback" style="">
                                        الرجاء ادخال بريد الكتروني صحيحس
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="inputName">تأكيد البريد الاكتروني</label>
                                    <input type="email" class="form-control is-valid" name="inputName" id="inputName">
                                    <div class="invalid-feedback" style="">
                                        الرجاء ادخال بريد الكتروني صحيحس
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4 pt-5">
                            <label for="inputName">كلمة المرور</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                Validation message
                            </div>
                        </div>
                        <div class="col-12 w-100 col-md-6 col-sm-12 col-xs-4 pt-5">
                            <label for="inputName">تأكيد كلمة المرور</label>
                            <input type="text" class="form-control is-valid" name="inputName" id="inputName">
                            <div class="invalid-feedback" style="">
                                Validation message
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-5 bg-dark">تسجيل حساب جديد</button>
                </div>
            </div>
        </form>
    </div>


    <script>
        $('.custom-control-input').click(function(){
            if($(this).val() == 2)
            {
                $('#normalUser').slideUp(1000,function(){
                    $('#businessUser').slideDown(1000);
                 });
            }
            else if($(this).val() == 3)
            {
                $('#businessUser').slideUp(1000,function(){
                    $('#normalUser').slideDown(1000);

                });
            }
        });

    </script> --}}





































    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تسجيل جديد</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right"></label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
