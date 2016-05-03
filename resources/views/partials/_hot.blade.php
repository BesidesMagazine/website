<div class="hot-container">
    <h1>
        熱門文章
    </h1>
    <table>
        @foreach($hotArticles as $hotArticle)
            <tr>
                <td onclick="window.location.href='{{ route('article', ['category' => $hotArticle->category_name, 'title' => $hotArticle->title ]) }}';">
                    <a>{{$hotArticle->title}}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
