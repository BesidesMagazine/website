<header class="header">
    <nav class="nav">
        <a style="text-decoration:none;" href="{{url('/')}}">
            <img class = "logo-pic" src="/img/translogo.png" />
        </a>

        <span class="logo-name">
            <a href=" {{url('/')}} ">BESIDES.MAGAZINE</a>
        </span>

        <div class = "category-bar">
            <div class="category-item">
                <a href = "{{ url('/about') }} ">關於除了</a>
            </div>
            {{-- <div class="category-item">
              <a href = "{{ url('/announcement') }} ">活動公告</a>
            </div> --}}
          <div class="dropdown category-item">
              <a class="dropbtn" href="#">文章</a>
              <i class="fa fa-sort-desc arrow-down" aria-hidden="true"></i>
              <div class="dropdown-content">
                  @foreach ($categories as $category)
                      <div class="category-item">
                          <a href = "{{ route('category.show', ['category' => $category->name])}} ">{{$category->name}}</a>
                      </div>
                  @endforeach
              </div>
          </div>
          <div class="category-item">
              <a href="{{ url('/author') }}">作者列表</a>
          </div>
          <div class="category-item">
              <a href="#">合作攝影者</a>
          </div>
          <div class="category-item">
              <a href="{{ url('/connect') }}">聯絡除了</a>
          </div>
          <div class="category-item">
              <a href="{{ url('/partner') }}">合作夥伴</a>
          </div>
        </div>
        <div class="social-media-bar">

            <a href="https://www.instagram.com/besides_magazine/">
                <i class="fa fa-instagram"  aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/besidesmagazine/">
                <i class="fa fa-facebook-square"  aria-hidden="true"></i>
            </a>

        </div>
    </nav>
</header>
