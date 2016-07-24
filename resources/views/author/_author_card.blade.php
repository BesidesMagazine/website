<div class="card-author">

    <div class="front">
        <div style="background-image: url('{{$author->image_url}}');">
        </div>
        <span>{{$author->name}}</span>
    </div>

    <div class="back">
        <div class="author-intro">
            <p>{{$author->introduction}}</p>
        </div>
        <a href="{{ route('author.show',['id' => $author->name]) }}"><div class="author-link">更多...</div></a>
    </div>

    <script>
        $(".card-author").flip({trigger: 'click'});
    </script>
</div>
