<div class="card" onclick="location.href='{{ route('article',['category' => $article->category_name, 'title' => $article->title])}}' " >
    <p class="card-category-name">{{$article->category_name}}</p>
    <p class="card-title">{{$article->title}}</p>
    <div class="card-picture-container" style="background-image: url('{{$article->previewimg}}');" ></div>
    <p class="card-content">{{$article->preview}}</p>
    <p class="card-time"> {{substr($article->created_at,0,10)}}</p>
</div>
