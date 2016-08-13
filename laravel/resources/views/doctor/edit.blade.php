@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>اطلاعات کاربری</h2>
            <hr/>

            <form role="form" method="post" action="{{ URL::to('admin/') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">نام :‌ </label>
                    <input id="title" class="form-control" name="title" value = "{{doctor->first_name}}"/>
                </div>
                <div class="form-group">
                    <label for="body">نام خانوادگی :‌</label>
                    <textarea id="body" class="form-control" name="body" value = "{{article->body}}"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">ثبت سوال</button>
                </div>
            </form>
        </div>
    </div>

@endsection