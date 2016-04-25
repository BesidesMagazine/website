<div class="slideshow-container">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 720px; height: 484px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 720px; height: 484px; overflow: hidden;">
            @each('welcome._slide_article', $hotArticles, 'hotArticle')
            <a data-u="ad" href="http://www.jssor.com" target="_blank" style="display:block;position:absolute;top:0;right:0;width:16px;height:16px;"><img src="img/icon-16.png" title="Jssor Slider" alt="Responsive Slider" /></a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb14" style="bottom:16px;right:16px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator --><span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span><span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
</div>
