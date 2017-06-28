<div class="content-container">
    <span class="author-title">作者列表</span>
    <hr class="separator">
    @foreach($authors as $author)
        @include('author._author_card')
    @endforeach
</div>
<script>
    $(".card-author").flip();
</script>
