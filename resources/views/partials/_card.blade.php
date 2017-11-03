<li class="cards__item" onclick="location.href='{{ route('article.show',['title' => $article->title])}}'">
    <div class="card">
        {{-- <div class="card-cover">
        </div> --}}

        <div class="card__image" style="background-image: url('{{$article->preview_image}}');" ></div>

        <div class="card__content">
            <p class="card-time"> {{substr($article->created_at,0,10)}}</p>
            <div class="card__title"><h3>{{$article->title}}</h3></div>
            <!-- <center class="card__text"> {{substr($article->created_at,0,10)}}</center> -->
            <p class="card__text">{{$article->preview_content}}</p>
            <p class="author">
                by&nbsp;&nbsp;{{$article->author_name}}
            </p>
        </div>
    </div>
</li>
