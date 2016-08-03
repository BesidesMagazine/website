<div class="card" onclick="location.href='{{ route('article.show',['title' => $article->title])}}' " >
    <div class="card-cover">
    </div>
    <p class="card-time"> {{substr($article->created_at,0,10)}}</p>
    <div class="card-picture-container" style="background-image: url('{{$article->preview_image}}');" ></div>

    <p class="card-title">{{$article->title}}</p>
    <p class="card-content">{{$article->preview_content}}</p>

</div>
