@extends('layouts/theme')
@section('content')

        <style>
            div.img {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 300px;
            }

            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: 250px;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }
        </style>
        <div class="container" >

            <div class="row" style="height:170px;"></div>
        @foreach($images as $image)

    <div class="img col-rtl">
        <a target="_blank" href="#">
            <img src={{$image->image_gallery_addr}} alt="Fjords" >
        </a>
        <div class="desc fa-font-set">{{$image->title}}</div>
    </div>


@endforeach
    </div>
@endsection