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
			<a class="forum-navbar-a" href="#forum-link">立即報名</a>
			<a class="forum-navbar-a" href="#forum-location">交通方式</a>
			<a class="forum-navbar-a" href="#forum-partners">合作夥伴</a>
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

						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox6">
								<img src="img/forum/speaker_6.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									陳翰林 先生
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									EZTBLE創辦人
								</span>
								
							</div>
						</td>
					</tr>
					<tr>
						<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox7">
								<img src="img/forum/speaker_7.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									歐陽靖 女士
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									
								</span>
								
							</div>

							<td class="forum-speaker-intro-pic-td">
							<div class="forum-speaker-intro-card">
								<a href="#lightbox8">
								<img src="img/forum/speaker_8.png" class="forum-speaker-intro-pic"/>
								</a>
								<br />
								<span class="forum-speaker-intro-name">
									Peter Su
								</span>
								<br />
								<span class="forum-speaker-intro-job">
									BRAND名牌誌駐站作家
								</span>
								
							</div>
						</td>
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
				<p>桃園市中壢區中大路300號 國立中央大學 校史館大講堂</p>

				<h1 class="forum-p-h">國道1號（中山高速公路）</h1>
					<p>中壢交流道（62公里）出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約5~10分鐘。</p>
				<h1 class="forum-p-h">國道3號（福爾摩沙高速公路）</h1>
					<p>大溪交流道（62公里）出口，往中壢方向行駛，轉台66線快速公路（往中壢、觀音方向），接國道1號（北上），於62公里中壢交流道出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約20分鐘。</p>
				<h1 class="forum-p-h">GPS衛星導航</h1>
					<p>北緯24.96828，東經121.195474</p>

				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.5457458239293!2d121.19373058338255!3d24.96757025247333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x18fbcfafda6062ec!2z5qCh5Y-y6aSo!5e0!3m2!1szh-TW!2stw!4v1461944488534" width="80%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>


		<div class="forum-agenda" id="forum-partners">
			<div class="forum-partner-container">
				<h1 class="forum-h-orange">合作夥伴</h1>

				<h1 class="forum-s-h-blue">指導單位</h1>
				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/young_bureau.png" />
					<br />
					<br />
					<span class="forum-s-h">青年事務局</span>
				</div>

				<h1 class="forum-s-h-blue">贊助夥伴</h1>
				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/uber.png" />
					<br />
					<br />
					<span class="forum-s-h">Uber</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/tutorabc.png" />
					<br />
					<br />
					<span class="forum-s-h">TutorABC</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/mrcomputer.png" />
					<br />
					<br />
					<span class="forum-s-h">電腦先生</span>
				</div>


				<h1 class="forum-s-h-blue">媒體夥伴</h1>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/epoch_times.jpg" />
					<br />
					<br />
					<span class="forum-s-h">大紀元時報</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/dit.png" />
					<br />
					<br />
					<span class="forum-s-h">創夢市集</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/udn.jpg" />
					<br />
					<br />
					<span class="forum-s-h">聯合新聞網</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/Benchlife.png" />
					<br />
					<br />
					<span class="forum-s-h">BenchLife</span>
				</div>
				
				<br />
				<br />

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/taaze.jpg" />
					<br />
					<br />
					<span class="forum-s-h">TAAZE 讀冊</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/crowd_watch.jpg" />
					<br />
					<br />
					<span class="forum-s-h">群眾觀點</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/inspire.png" />
					<br />
					<br />
					<span class="forum-s-h">inspire</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/womany.png" />
					<br />
					<br />
					<span class="forum-s-h">女人迷</span>
				</div>

				<br />
				<br />

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/kanro.jpg" />
					<br />
					<br />
					<span class="forum-s-h">甘樂誌</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/fong.png" />
					<br />
					<br />
					<span class="forum-s-h">風傳媒</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/vide.jpg" />
					<br />
					<br />
					<span class="forum-s-h">甘樂誌</span>
				</div>
				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/lecturenight.jpg" />
					<br />
					<br />
					<span class="forum-s-h">深夜講堂</span>
				</div>

				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/unbiggie.png" />
					<br />
					<br />
					<span class="forum-s-h">小人物</span>
				</div>
				<div class="forum-partner-block">
					<img class="forum-partner-pic" src="img/forum/partners/xinmedia.png" />
					<br />
					<br />
					<span class="forum-s-h">欣傳媒</span>
				</div>

				
			</div>
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

<div id="lightbox6" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_6.png" /></a>
		<h1 class="forum-speaker-intro-name">陳翰林 先生</h1>
		<span class="forum-speaker-intro-job">EZTABLE創辦人</span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>陳翰林是餐廳線上訂位服務EZTBLE創辦人，而EZTABLE是美國哈佛大學商學院破壞式創新理論大師克雷頓．克里斯汀生旗下的Rose Park Advisors創投投資在亞洲地區第一、也是唯一投資的公司。</li>
			<li>關於EZTABLE</li>
			<ul>
				<li>	全亞洲超過9000家餐廳合作訂位，是亞洲最大線上餐廳訂位服務
				<li>	台灣第一家線上餐廳訂位網
				<li>	台灣會員數突破120萬
				<li>	訂位人次突破1000萬
				<li>	超過100種客製化訂位規則
				<li>	一條龍整合過程，預定即預付制度

			</ul>
			</ul>
		</span>
	</div>
</div>

<div id="lightbox7" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_7.png" /></a>
		<h1 class="forum-speaker-intro-name">歐陽靖 女士</h1>
		<span class="forum-speaker-intro-job"></span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>歐陽靖為台灣女作家、演員、模特兒、跑者，活耀於各大領域。近幾年，參與各大馬拉松賽事，將完成全程馬拉松當作自己變堅強的證明，而歐陽靖也用她的生命經歷鼓舞許多人，帶給大家正面能量。</li>
			<li>除了前往世界各地參與路跑賽，也出版了《RUN! GIRLS RUN! - 歐陽靖寫給女生的跑步書》、《旅跑．日本》等著作。將其親身參與多場馬拉松賽事的經驗，集結成書。</li>
			<li>2005年，歐陽靖在侯孝賢電影《最好的時光-青春夢》，入圍第42屆金馬獎最佳造型設計獎項。近期也陸續參與了電影《菜鳥》、《逆轉勝》等演出。</li>
			</ul>
		</span>
	</div>
</div>

<div id="lightbox8" class="lightbox">
	<div class="figure">
		<a href="#forum_speakers" class="close">X</a>
		<a href="#forum_speakers"><img src="img/forum/speaker_8.png" /></a>
		<h1 class="forum-speaker-intro-name">Peter Su</h1>
		<span class="forum-speaker-intro-job">BRAND名牌誌駐站作家</span>
		<br />
		<span class="forum-speaker-intro-text">
			<ul>
			<li>「夢想其實不是一段距離，而是一個你會堅持到底的決定。」他，是蘇世豪，Peter Su，76年次的他，是一位暢銷的作家，是一位踏遍各地的背包客，更是一位熱愛攝影與設計的藝術家。在大家眼中看似一切順遂的他，其實也有過坎坷的人生。</li>

			<li>毅然決然放棄大學升學考試，進入廣告公司任職，對他而言，最重要的不是學歷，而是知道自己想要甚麼，做自己熱愛的事。而他的夢想就是，在自己的能力範圍內幫助別人，做一個有價值的人。</li>

			<li>他利用擅長的文字和影像，將他認為有意義的事和大家分享，讓這件事情可以透過梯歡他的人傳遞出去。他曾經因此而拯救了一位罹癌媽媽，也曾經和便當店合作，發起代用便當的活動。</li>

			<li>在他的人生旅途中，他學到了不要逃避。也許過程很辛苦，但他從來不放棄他的夢想，因為他說「有些路不走，你永遠不知道會有多美，所以還是繼續向前走吧！」夢想，有時候不是看到了才相信，而是相信了才看到！</li>

			<li>2014 Peter出版了《夢想這條路踏上了，跪著也要走完》，2015 出版《愛：即使世界不斷讓你失望，也要繼續相信愛》，目前更是天下雜誌駐站作家．Brand名牌誌專欄作家，Cheers駐站作家。</li>


			</ul>
		</span>
	</div>
</div>
@endsection