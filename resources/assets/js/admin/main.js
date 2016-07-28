$(function() {

  $('#category-selector a').click(handleCategoryClick);
  $('#category-selector a:first').click();
  function handleCategoryClick() {
    $.get(articlesAjaxString(4, $(this).text()), function(data, status) {
      if (status == "error")
        alert("伺服器錯誤");
      else {
        $('#article-list').html('');
        appendArticles(data);
      }
    });

    $('#category-selector li.active').html('<a style="font-size:1.3em;cursor:pointer">' + $('#category-selector li.active').text() + '</a>').removeClass('active').children().click(handleCategoryClick);

    $(this).parent().html('<span style="font-size:1.3em;">'+ $(this).text()+'</span>').addClass('active');


  }

  function appendArticles(articles) {
    var htmlString='';
    for (let article of articles) {
      htmlString += createArticleCard(article);
    }
    $('#article-list').html(htmlString);
  }

  function createArticleCard(article) {
    var html =
    '<a style="text-decoration:none;color:black" href="article/' + article.id + '/edit">'+
        '<div class="panel panel-default" style="cursor:pointer;overflow:hidden;">'+
            '<div class="panel-body">'+
                '<div class="row">'+
                    '<div class="col-md-3">'+
                        '<div style="background-size: cover;background-position: center;background-image:url('+ article.preview_image +');min-height:180px;width:100%;" >'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-9">'+
                        '<div style="max-height:180px;vertical-align:top;">'+
                            '<p style="font-size:34px;height:100px;overflow:hidden;">'+
                                article.title +
                            '</p>'+
                            '<p style="font-size:1.5em;padding-left:400px;padding-top:20px;">'+
                                '<u style="padding-right:10px;">'+
                                article.author_name +
                                '</u>'+
                                ' 發表於：'+
                                article.created_at +
                            '</p>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</a>';
    return html;

  }

  function addEditLink(article){

  }

  function articlesAjaxString(take, category) {
    if (category == '最近') {
      return 'getArticles?take=' + take;
    } else
      return 'getArticles?take=' + take + '&category=' + category;
  }


  console.log('haha');
});
