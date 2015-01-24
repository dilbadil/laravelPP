@section('content')
    {{ Form::model($post, ['route' => 'post.store', 'method' => 'post']) }}
        {{ Form::label('title', 'Title') }}
        <!-- <small>Posted by You</small> -->
        {{ Form::text('title') }}

        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body') }}

        {{ Form::submit('Save post!') }}
        {{ Form::hidden('author', 'You') }}
    {{ Form::close() }}
@stop

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop
