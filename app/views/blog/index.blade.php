@section('content')
    <ul class="posts">
        @for($i=1; $i<=5; $i++)
        <li>
            <h2>Post Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laborum ea possimus dolorum sed odit, officiis labore, aspernatur reprehenderit dolore voluptas voluptatum. Inventore, sapiente fugit, neque possimus id optio assumenda!</p>
        </li>
        @endfor
    </ul>
@stop