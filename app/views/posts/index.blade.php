@section('content')
    @if ( isset($message))
        <p>
            << $message >>
        </p>
    @endif
    <p>
        <small>Total posts << count($posts) >></small>
    </p>
    <ul class="posts">
        @foreach ($posts as $post)
            <li>
                <h2><a href="<< URL::route('post.show', $post->id) >>"><< $post->title >></a></h2>
                <small>Posted by << $post->author >></small>
                <small><a href="<< URL::route('post.edit', $post->id) >>">Edit post</a></small>
                <p><< $post->body >></p>
            </li>
        @endforeach
    </ul>
@stop
