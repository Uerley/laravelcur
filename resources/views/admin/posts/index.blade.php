<a href="{{route('posts.create')}}">Criar Novo Post</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
<h1>O Post</h1>

@foreach($posts as $post)
    <p>{{$post->title}} [ 
        <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
     ]</p>
@endforeach