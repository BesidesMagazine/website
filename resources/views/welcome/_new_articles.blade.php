<div class="article-partial-wall">

    <a class="category-title"><span >最新文章</span></a>
    <hr class="separator">
    <br>
    <ul class="cards">
        @foreach($articles->take(6) as $article)
            @include('partials._card')
        @endforeach
    </ul>
    <!-- <div class="more" onclick="location.href='#'">
        <h4>MORE<i class="fa fa-arrow-right" aria-hidden="true"></i></h4>
    </div> -->
</div>
