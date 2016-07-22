<div class="hot-bar">
    <h1>
        熱門文章
    </h1>
    <table>
        @foreach($hotArticles as $hotArticle)
            <tr>
                <td onclick="window.location.href='{{ route('article.show', ['title' => $hotArticle->title ]) }}';">
                    <a>{{$hotArticle->title}}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
