@extends('layouts/theme')
@section('content')

        {{--<style>--}}
            {{--div.img {--}}
                {{--margin: 5px;--}}
                {{--border: 1px solid #ccc;--}}
                {{--float: left;--}}
                {{--width: 300px;--}}
            {{--}--}}

            {{--div.img:hover {--}}
                {{--border: 1px solid #777;--}}
            {{--}--}}

            {{--div.img img {--}}
                {{--width: 100%;--}}
                {{--height: 250px;--}}
            {{--}--}}

            {{--div.desc {--}}
                {{--padding: 15px;--}}
                {{--text-align: center;--}}
            {{--}--}}
        {{--</style>--}}
        <div class="container-fluid" >

            <div class="row" style="height:170px;"></div>
            </div>
        <div class="container-fluid">

                <?php $flag = 0; ?>
        @foreach($images as $image)
            @if($flag%3 == 0)
                <?php
                    echo "<div class='row'>"
                ?>
             @endif

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-col">
    <div class="img col-rtl">
        <a target="_blank" href="#">
            <img src={{$image->image_gallery_addr}} alt="Fjords" >
        </a>
        <div class="desc fa-font-set">{{$image->title}}</div>
    </div>
    </div>

        @if($flag%3 == 2)
        <?php
        echo "</div >"
        ?>
        @endif

                        <?php $flag = $flag + 1; ?>
@endforeach
        @if($flag%3 != 2)
            <?php
            echo "</div >"
            ?>
        @endif

    </div>

@endsection