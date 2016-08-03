<div class="article-partial-wall">
    <a class="category-title" href="{{route('category.show',['category' => $category->name])}}">
        <span >
            {{ $category->name }}
        </span>
    </a>
    <br>
    @foreach($articles->where('category_name', $category->name)->take(3) as $article)
        @include('partials._card')
    @endforeach

</div>
