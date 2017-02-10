@extends('../layouts.theme')
        @section('content')
<!--content-->




<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="bg-image">
                <img class="img-responsive" src="content/img/question_bg.jpg">
                <div class="question-container fa-font-set">
                    <div style="padding:20px;">


                        <h1 style="padding-right: 14px;padding-top: 54px; font-size:24px; "> سوالات خود را در فرم زیر ثبت کنید:</h1>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/question_store') }}" >
                            {{csrf_field()}}


                            <h5 style="padding-right:14px;margin:0px;font-size:18px;  ">نام     </h5><br>
                            <input class="fa-font-set" name = "name" style="background-color:wheat; margin-right:10px;width:40%; height: 100%;font-size:18px;" type="text" ><br>
                            <h5 style="padding-right:14px;margin:0px;font-size:18px; padding-top: 8px;">ایمیل ادرس</h5><br>
                            <input  name= "email" style="background-color:wheat; margin-right:10px;width:40%;height: 100%;" type="text" ><br>
                            <h5 style="padding-right:14px;margin:0px;font-size:18px;padding-top: 8px; ">سوال</h5><br>
                            <textarea class="fa-font-set" style="background-color:wheat;margin-right:10px;width:40%;" name="text" rows="10" cols="100"></textarea>
                            <br>
                            <br>
                            <div style="padding-right:170px; ">  <button type="submit" class="red-btn fa-font-set" style="margin-top: 20px; margin-left: 700px;">ثبت سوال</button></div>
                        </form></div><br>



                @foreach($answeredQs as $question)
                        <p class="qa-caption-style">سوال</p>
                        <p class="qa-description-style">{{$question->text}}</p>
                        <p class="qa-caption-style">پاسخ</p>
                        <p class="qa-description-style qa-bottom">{{$question->answer}}</p>
                    @endforeach
                </div>
                <img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
                <!--<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">-->
            </div>
        </div>
    </div>
</div>
@endsection