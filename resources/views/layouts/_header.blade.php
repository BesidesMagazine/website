<div class="header">
    <div class="nav">
        <a href="{{env('APP_URL')}}"><img class = "logo-pic" src="/img/logo.png" /></a>
        <div class = "category-bar">

            @foreach ($categories as $category)
                <div class="category-item">
                    <a href = "{{ route('category', ['category' => $category->name])}} ">{{$category->name}}</a>
                </div>
            @endforeach

        </div>
    </div>
</div>
