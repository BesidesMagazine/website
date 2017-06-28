<div class="base-card">
    <div class="card-author">

        <div class="front" style="background-image: url('{{$author->image_url}}');">

        </div>

        <div class="back">
            <div class="author-intro">
                <p>{{$author->introduction}}</p>
            </div>

        </div>
    </div>
    <a class="author-link" href="{{ route('author.show',['id' => $author->name]) }}">
        {{$author->name}}
    </a>
    <span class="eng-name">
        
    </apsn>

</div>
