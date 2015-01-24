@section('content')
    @if(count($errors->all()) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <li><< $e >></li>
            @endforeach
        </ul>
        <hr>
    @endif
    << Form::open(['route'=>'login.post']) >>
        <div>
            << Form::label('email') >>
            << Form::text('email') >>
            << $errors->first('email') >>
        </div>
        <div>
            << Form::label('password') >>
            << Form::password('password') >>
        </div>
        <div><< Form::submit('Login') >></div>
    << Form::close() >>
@stop
@section('css')
    @parent
    <link rel="stylesheet" href="<< asset('css/login.css') >>">
@stop
