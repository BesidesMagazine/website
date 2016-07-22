<div class="header">
    <div class="nav">
        <a href="{{env('APP_URL')}}"><img class = "logo-pic" src="/img/logo.png" /></a>
        <div class = "category-bar">
            <div class="category-item">
            <a href = "{{route("forum")}}">2016異想論壇</a>
            </div>
            @foreach ($categories as $category)
                <div class="category-item">
                    <a href = "{{ route('category.show', ['category' => $category->name])}} ">{{$category->name}}</a>
                </div>
            @endforeach

        </div>
    </div>
</div>
