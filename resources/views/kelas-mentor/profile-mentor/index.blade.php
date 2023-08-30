{{$posts->users->name}}
@foreach ($pos as $post )
<div>
    {{$post->title}}<br>
    {{$post->category}}

</div><br>
@endforeach
