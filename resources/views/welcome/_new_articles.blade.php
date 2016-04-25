<div class="all-cards-partial-wall">
    <hr class="separator" style="width: 95%;">
    <a><div class="category-wall-title"><h1>最新</h1></div></a>
    <br>
    @foreach($articles->take(4) as $article)
        @include('partials._card')
    @endforeach

</div>
