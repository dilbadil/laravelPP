@section('content')
    <h2><a href="<< URL::route('post.show', $post->id) >>"><< $post->title >></a></h2>
    <small>Posted by << $post->author >></small>
    <small><a href="<< URL::route('post.edit', $post->id) >>">Edit post</a></small>
    <p><< $post->body >></p>
@stop
