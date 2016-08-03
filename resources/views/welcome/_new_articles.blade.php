<div class="article-partial-wall">

    <a class="category-title"><span >最新</span></a>
    <hr class="separator">
    <br>
    @foreach($articles->take(3) as $article)
        @include('partials._card')
    @endforeach

</div>
