<header class="header">
    <nav class="nav">
        <a style="text-decoration:none;" href="{{env('APP_URL')}}">
            <img class = "logo-pic" src="/img/translogo.png" />
        </a>
        <div class = "category-bar">
          <div class="category-item">
              <a href = "{{ url('/announcement') }} ">活動公告</a>
          </div>
            @foreach ($categories as $category)
                <div class="category-item">
                    <a href = "{{ route('category.show', ['category' => $category->name])}} ">{{$category->name}}</a>
                </div>
            @endforeach

        </div>
        <div class="social-media-bar">

            <a href="https://www.instagram.com/besides_magazine/">
                <i class="fa fa-instagram"  aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/besidesmagazine/">
                <i class="fa fa-facebook-square"  aria-hidden="true"></i>
            </a>

        </div>
    </div>
</header>
