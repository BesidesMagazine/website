
    @foreach($hotArticles as $article)
        <div class="slide-container" style="display:none;background-image: url({{$article->preview_image}})">
                <div class="slide-cover">
                </div>
                <div class="slide-show" style="background-image: url({{$article->preview_image}});">
                    <div class="slide-content">
                        <h1 class="title">{{$article->title}}</h1>
                        <p class="preview">
                            {{$article->preview_content}}
                        </p>
                    </div>
                </div>
        </div>
    @endforeach


<div class="slide-controller">

    
</div>
