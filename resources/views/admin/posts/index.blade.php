<a href="{{route('posts.create')}}">Criar Novo Post</a>
<h1>O Post</h1>

@foreach($posts as $post)
    <p>{{$post->content}}</p>
@endforeach