@extends("layouts.app")

@section('content')

    <div class="row">

        @foreach($answeredQs as $answeredQ)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>{{answeredQ->text}}</p>
                        <p>
                            {{answeredQ->answer}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection