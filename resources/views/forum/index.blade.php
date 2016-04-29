@extends('layouts.master')

<link rel="stylesheet" type="text/css" href="css/forum.css">

@section('content')
<style type="text/css">
	.forum-ad{
		display: none;
	}
</style>


<div class="forum-banner-container">
	<div class="content">
		<div class="forum-navbar">
			<a class="forum-navbar-a" href="#forum-origin">論壇緣起</a>
			<a class="forum-navbar-a" href="#forum-agenda">論壇議程</a>
			<a class="forum-navbar-a" href="#forum-speakers">講者簡介</a>
			<a class="forum-navbar-a" href="#forum-location">交通方式</a>
			<a class="forum-navbar-a" href="#forum-link">立即報名</a>
		</div>

		<img src="img/forum_banner.png" class="forum-banner-img"/>
			<div class="forum-banner-right">
				<br /><br />
				<span class="forum-banner-engtext">6.18</span>
				<br />
				<span class="forum-banner-chtext">國立中央大學大講堂</span>
			</div>

			<div class="forum-origin">
				<h1 class="forum-h">
					論壇緣起
				</h1>
				<p class="forum-p"  id="forum-origin">
					《除了》2016 異想論壇，緣起於《除了》雜誌創辦至今之核心理念之推廣，即建立一多元發聲之議題平台，讓各項領域之議題皆能有機會獲得重視，並結合新世代重視之創新創造的發想能力，展現不同的視野；此外，本次論壇亦與《除了》第二期之主題「做，白日夢」密切連結，傳達「透過努力實踐，天馬行空的夢也有實現的機會」之理念；我們希望透過此次論壇，結合文化藝術、影視、媒體與傳播、創新創業、社會參與等領域之傑出前輩的分享，將此「異想」之理念充分傳遞與參與者。
				</p>
				<h1 class="forum-h">
					論壇主軸——「異想」
				</h1>
				<p class="forum-p">
					何謂異想？即是時代中的逆行者，而此指之逆行並非僅是劃分時代新舊、美醜和強弱，更是要突破傳統思維框架，在時代中創造屬於自己獨特的標誌， 本次論壇橫跨五大主軸，每位將邀請之講者，皆是在該領域具高度「創造力」 的夢想家與實踐者，從各自的視野，與參與者分享新世代的多元觀點。
				</p>
			</div>

			<div class="forum-agenda" id="forum-agenda">
				<h1 class="forum-h-orange">
					議程
				</h1>
				<table class="forum-agenda-table">
					<tr class="forum-agenda-tr">
						<th class="forum-agenda-th">時間</th>
						<th class="forum-agenda-th">主題</th>
						<th class="forum-agenda-th">時間</th>
						<th class="forum-agenda-th">講者</th>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">08:30~09:00</td>
						<td class="forum-agenda-td">入場</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">09:00~09:20</td>
						<td class="forum-agenda-td">開幕致詞</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">09:20~10:20</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-category">影視——另類表達</span><br /><br />
						</td>
						<td class="forum-agenda-td">
							<span>09:20~09:50</span>
							<br /><br/>
							<span>09:50~10:20</span>
						</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-speaker-intro">台灣知名電影導演</span><br />
							<span class="forum-agenda-speaker-name">王小棣女士</span>
							<br />
							<span class="forum-agenda-speaker-intro">台灣知名導演、演員</span><br />
							<span class="forum-agenda-speaker-name">鄭有傑先生</span>
						</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">10:20~11:50</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-category">文化藝術——生命故事</span><br /><br />
						</td>
						<td class="forum-agenda-td">
							對談
						</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-speaker-intro">ppaper 雜誌創辦人</span><br />
							<span class="forum-agenda-speaker-name">包益民先生</span>
							<br />
							<span class="forum-agenda-speaker-intro">台灣知名設計師</span><br />
							<span class="forum-agenda-speaker-name">蕭青陽先生</span>
						</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">11:50~13:20</td>
						<td class="forum-agenda-td">休息時間</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">13:20~14:20</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-category">媒體與傳播——引領潮流</span>
						</td>
						<td class="forum-agenda-td">
							<span>13:20~13:50</span>
							<br /><br />
							<span>13:50~14:20</span>
						</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-speaker-intro">城邦集團執行長</span><br />
							<span class="forum-agenda-speaker-name">何飛鵬先生</span>
							<br />
							<span class="forum-agenda-speaker-intro">30 雜誌執行長</span><br />
							<span class="forum-agenda-speaker-name">成章瑜女士</span>
						</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">14:20~15:50</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-category">創新創業——實現異想</span>
						</td>
						<td class="forum-agenda-td">
							對談
						</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-speaker-intro">Google 台灣總經理</span><br />
							<span class="forum-agenda-speaker-name">簡立峰先生</span>
							<br />
							<span class="forum-agenda-speaker-intro">全聯社總裁</span><br />
							<span class="forum-agenda-speaker-name">徐重仁先生</span>
							<br />
							<span class="forum-agenda-speaker-intro">貝殼放大創辦人</span><br />
							<span class="forum-agenda-speaker-name">林大涵先生</span>
						</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">15:50~16:00</td>
						<td class="forum-agenda-td">休息時間</td>
					</tr>

					<tr class="forum-agenda-tr">
						<td class="forum-agenda-td">16:00~17:00</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-category">社會參與——真實對話</span><br /><br />
						</td>
						<td class="forum-agenda-td">
						</td>
						<td class="forum-agenda-td">
							<span class="forum-agenda-speaker-intro">社企流創辦人</span><br />
							<span class="forum-agenda-speaker-name">林以涵女士</span>
							<br />
							<span class="forum-agenda-speaker-intro">歐北來團隊創辦人</span><br />
							<span class="forum-agenda-speaker-name">蔡昇達先生</span>
						</td>
					</tr>

				</table>
			</div>

			<div class="forum-speaker-intro" id ="forum-speakers">
				<h1 class="forum-h">
					講者簡介
				</h1>
				
				<table class="forum-speaker-intro-table">
					<tr class="forum-speaker-intro-tr">
						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">

								<a class="forum-speaker-a" href="#lightbox1">
								<img src="img/forum/speaker_1.png" class="forum-speaker-intro-pic"/></a>
								<br />
								<span class="forum-speaker-intro-name">
									余宛容 女士
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									生態綠創辦人
								</span>
							</div>
							
						</td>

						<td class="forum-speaker-intro-pic-td">
							
							<div class="forum-speaker-intro-card">
								<a href="#lightbox2">
								<img src="img/forum/speaker_2.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									林大涵 先生
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									貝殼放大創辦人
								</span>
								<br />
								
							</div>
						</td>
						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox3">
									<img src="img/forum/speaker_3.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									包益民 先生
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									包氏集團、PPAPER雜誌創辦人
								</span>
								
							</div>
						</td>

					</tr>


					<tr class="forum-speaker-intro-tr">
						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox4">
								<img src="img/forum/speaker_4.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									王小棣 女士
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									金鐘獎、國家文藝獎得主
								</span>
								
							</div>
						</td>
						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox5">
								<img src="img/forum/speaker_5.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									蔡昇達 先生
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									歐北來團隊共同創辦人
								</span>
								
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="forum-signup" id="forum-link">
				<h1 class="forum-h-orange">
					立即報名
				</h1>
				<p class="forum-p">
					
					<a class="forum-a" href="">立即購票！</a>
				</p>
				
			</div>

			<div class="forum-origin" id="forum-location">
				<h1 class="forum-h">
					交通方式
				</h1>
				<div class="forum-p">

				<h1 class="forum-p-h">地址</h1>
				<p>桃園市中壢區中大路300號 國立中央大學 大講堂</p>

				<h1 class="forum-p-h">國道1號（中山高速公路）</h1>
					<p>中壢交流道（62公里）出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約5~10分鐘。</p>
				<h1 class="forum-p-h">國道3號（福爾摩沙高速公路）</h1>
					<p>大溪交流道（62公里）出口，往中壢方向行駛，轉台66線快速公路（往中壢、觀音方向），接國道1號（北上），於62公里中壢交流道出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約20分鐘。</p>
				<h1 class="forum-p-h">GPS衛星導航</h1>
					<p>北緯24.96828，東經121.195474</p>

				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.901056278836!2d121.19032761444473!3d24.96948078400261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1461862298062" width="80%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
	</div>
</div>


<div class="lightbox" id="lightbox1">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_1.png" /></a>
		<h1 class="forum-speaker-intro-name">余宛如 女士</h1>
		<span class="forum-speaker-intro-job">生態綠創辦人</span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>生態綠是華文地區第一家公平貿易特許商；榮獲經濟部「中小企業處」第八屆新創事業獎銀質獎。<br /></li>

			<li>曾任社會企業發展協會常務理事、國會助理、綠色電商聯盟副理事長。旗下的生態綠積極倡議「食物正義」與「倫理消費」，於2014 榮獲創投之星「最佳潛力獎」<br /></li>

			<li>自2016年當選成為不分區立委，問政重點展現於青年創業、社會企業、食安問題、性別平等面向<br /></li>
			</ul>
		</span>
	</div>
</div>

<div id="lightbox2" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_2.png" /></a>
		<h1 class="forum-speaker-intro-name">林大涵 先生</h1>
		<span class="forum-speaker-intro-job">貝殼放大創辦人</span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li><富比世雜誌> 2016亞洲30歲以下30大青年創業家</li>

			<li>關鍵評論網「台灣未來大人物」</li>

			<li>經理人雜誌「百大MVP經理人」</li>

			<li>貝殼放大
				<ul>
				<li>台灣第一間群眾集資顧問公司、亞洲最大群眾集資顧問公司</li>
				<li>2015年3.5億總募資金額，集資成功率達90%</li>
				<li>精彩案例</li>
					<ol>
						金萱字型集資，月亮杯募資計畫，灣生回家，鮮乳坊小農直送，Womany女人迷
					</ol>
				</ul>
			</li>
			</ul>
		</span>
	</div>
</div>

<div id="lightbox3" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_3.png" /></a>
		<h1 class="forum-speaker-intro-name">包益民 先生</h1>
		<span class="forum-speaker-intro-job">包氏集團、PPAPER雜誌創辦人 </span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>世界知名創意設計師、華人創意教父。《Archive》雜誌評選爲全球排名第7 與獲獎最多的創意總監。</li>

			<li>曾任台灣李奧貝納以及智威湯遜副創意總監，其作品獲得超過80個以上的世界大獎肯定。</li>

			<li>1995年成立包氏集團，2004年成功創辦了每雙周銷售量達100,000本的設計生活雜誌《PPAPER》，且成爲亞洲區設計類雜誌的龍頭，包氏集團目前已成爲國內最知名的設計公司之一。</li>

			</ul>
		</span>
	</div>
</div>

<div id="lightbox4" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_4.png" /></a>
		<h1 class="forum-speaker-intro-name">王小棣 女士</h1>
		<span class="forum-speaker-intro-job">金鐘獎、國家文藝獎得主 </span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>臺灣知名電影、電視劇的編劇和導演，國家文藝獎得主，被評選為臺灣重要的影視戲劇藝術家。</li>

			<li>1992年創立稻田電影工作室，已出版過無數作品，如《熱帶魚》、《波麗士大人》等，自1998年起，也陸續為公共電視台拍攝劇展電視長片，出版作品展現其題材之多樣性。</li>
			<li>得獎紀錄</li>
			<ul>
				<li>2005年以《擁抱大白熊》獲華語電影傳媒大獎最佳原著劇本；</li>
				<li>2007年，以《我在墾丁天氣晴》獲得第43屆金鐘獎最佳戲劇節目編劇獎。</li>
				<li>2014年，以《刺蝟男孩》獲得第49屆金鐘獎最佳戲劇節目編劇獎。</li>
			</ul>
			</ul>
		</span>
	</div>
</div>

<div id="lightbox5" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_5.png" /></a>
		<h1 class="forum-speaker-intro-name">蔡昇達 先生</h1>
		<span class="forum-speaker-intro-job">歐北來團隊共同創辦人</span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>2012年，成立台灣冷門景點熱血復甦計畫-歐北來，走訪台灣各地，蒐集台灣在地文化、故事、草根人物、地點等，深度報導台灣鄉鎮間未被注意的美好事物</li>

			<li>2013年，「島嶼拼圖」計畫開始，以商業化的模式讓部落文化得以永續，讓旅人可以深入了解部落，並使部落獲得新生。</li>

			<li>天下雜誌319鄉微笑台灣款款行專刊 特約撰稿、The News Lens 關鍵評論網 駐站作家、女人迷womany 駐站作家</li>

			</ul>
		</span>
	</div>
</div>
@endsection