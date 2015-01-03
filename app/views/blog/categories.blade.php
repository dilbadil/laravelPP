@section('content')
    <h2>Post Categories</h2>
    <ul class="posts">
        @for($i=1; $i<=5; $i++)
        <li>
            <h2>Post Category</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </li>
        @endfor
    </ul>
@stop
