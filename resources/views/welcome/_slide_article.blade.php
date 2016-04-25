<div data-b="0" data-p="150.50" data-po="80% 55%" style="display: none;">
    <a href="{{ route('article',['category' => $hotArticle->category_name, 'name' => $hotArticle->title])}}"><img data-u="image" src="{{$hotArticle->previewimg}}" /></a>
    <div style="position: absolute; top: 380px; left: 0px; width: 720px; height: 110px; background-color: rgba(73,73,73,0.6); font-size: 20px;">
    </div>
    <a href="{{route('article',['category' => $hotArticle->category_name, 'name' => $hotArticle->title])}}" class="news1" style="display: block; position: absolute; top: 380px; left: 10px; width: 720px; height: 50px; background-color: rgba(73,73,73,0); border-radius: 100px; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left; text-decoration: none;">{{$hotArticle->title}}</a>
    <a href="{{route('article',['category' => $hotArticle->category_name, 'name' => $hotArticle->title])}}" style="display: block; position: absolute; top: 430px; left: 10px; width: 700px; height: 50px; font-size: 14px; color: #ffffff; line-height: 20px; text-align: left; text-decoration: none;">{{$hotArticle->preview}}</a>
</div>
