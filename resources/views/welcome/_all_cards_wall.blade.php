<div class="all-cards-partial-wall">
    <hr class="separator" style="width: 95%;">
    <a href="{{route('category.show',['category' => $category->name])}}"><div class="category-wall-title"><h1>{{ $category->name }}</h1></div></a>
    <br>
    @foreach($articles->where('category_name', $category->name)->take(4) as $article)
        @include('partials._card')
    @endforeach

</div>
