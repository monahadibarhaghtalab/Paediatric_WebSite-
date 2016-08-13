@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ایجاد مطلب أموزشی  جدید</h2>
            <hr/>

            <form role="form" method="post" action="{{ URL::to('admin/article/create') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">عنوان مطلب: </label>
                    <input id="title" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="body">شرح مطلب:</label>
                    <textarea id="body" class="form-control" name="body"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">ثبت سوال</button>
                </div>
            </form>
        </div>
    </div>

@endsection