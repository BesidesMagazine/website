<div class="side-bar">
    <table>
        @foreach($hotArticles as $hotArticle)
            <tr>
                <td onclick="window.location.href='{{route('article.show', ['title' => $hotArticle->title ]) }}';">
                    <a>{{$hotArticle->title}}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
