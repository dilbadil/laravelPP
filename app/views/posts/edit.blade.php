@section('content')
    {{ Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'put']) }}
        {{ Form::label('title', 'Edit Title') }}
        <small>Posted by {{ $post->author }}</small>
        {{ Form::text('title') }}

        {{ Form::label('body', 'Edit Content') }}
        {{ Form::textarea('body') }}

        {{ Form::submit('Save post!') }}
    {{ Form::close() }}
    {{ Form::model($post, ['route' => ['post.destroy', $post->id], 'method' => 'delete']) }}
        {{ Form::submit('Delete post!') }}
    {{ Form::close() }}
@stop

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop
