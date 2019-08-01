@extends('layouts.app')

@section('content')
<div class=" my-container marTop">
    <div class="row bg-dark">
        <div class="col">
            <div class="card">
                <div class="card-body text-right">
                    <h5 class="card-title">اسم الاستراحة</h5>
                    <p class="card-text">الوصف</p>
                    <p class="card-text">
                        التقييم<input id="input-id" type="text" class="rating" data-size="lg" >
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $$("#input-id").rating({'size':'lg'});
</script>
@endsection
