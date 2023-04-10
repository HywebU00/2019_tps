<!DOCTYPE html>
<html lang="zh-TW">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>		
	<!-- Content -->
	<section id="MainContent">
		<div class="container">
			<!-- Content -->
			<div class="row">					
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- function -->
					<?php require_once('include_function.php'); ?>						
					<!-- content -->											
					<div class="ContentPage">									
						<h2 class="PageTitle">東森新聞太平山見晴懷古步道</h2>
						<?php require_once('include_font.php'); ?>	
						<!-- Meta -->
						<div class="Meta">
							<div class="MetaDay"><i class="icon-calendar"></i><span>發布日期：</span>2015/10/15</div>
							<div class="MetaDep hidden-xs"><i class="icon-tags"></i><span>發佈單位：</span><a href="">羅東林區管理處-育樂課</a></div>
							<div class="MetaDay hidden-xs"><i class="icon-calendar"></i><span>更新日期：</span>2015/02/04</div>						
						</div>
						<div class="WeatherArea">
							<table class="WeatherTable">
								<caption>標題</caption>	
								<tbody>
									<tr>
										<th>更新時間</th>
										<th>氣溫</th>
										<th>風速</th>
										<th>相對濕度</th>
										<th>日累積雨量</th>
									</tr>
									<tr>
										<td id="obsTime" data-th=更新時間>2016-06-08 17:30:00</td>
										<td id="temp" data-th=氣溫>14.9°C</td>
										<td id="wdsd" data-th=風速>1.0公尺/秒</td>
										<td id="humd" data-th=相對濕度>99%</td>
										<td id="h24r" data-th=日累積雨量>5.5%</td>
									</tr>
								</tbody>
							</table>
							<span id="tempTitle">天氣小幫手描述</span>
							<span id="tempUpdateTime">（更新時間：2016-06-08 05:28:10）</span>
							<span id="tempDesc">白天天氣穩定，留意午後局部雷陣雨；午間氣溫偏高，外出要多補充水分昨(7)日午前多雲到晴，午後熱對流發展，大部分鄉鎮都有出現短暫陣雨，其中最多降雨量發生在宜蘭縣大同鄉有38毫米；而午間天氣晴朗，測得紫外線最強達到過量級。氣溫方面，宜蘭氣象站測得最高溫31.3度，清晨最低溫24.1度。今(8)日天氣跟昨天(7號)類似，白天晴到多雲，午後有局部雷雨發生的機會，特別是山區雨勢可能會來的明顯一些，提醒往山區活動要注意天氣的變化；另外白天天氣晴朗時，紫外線指數較強，外出活動切記不要在太陽下曝曬過久，並且要注意防曬。氣溫方面，平地氣溫約24~32度，太平山區氣溫約15~21度；白天氣溫較高，戶外活動注意多補充水分，而山區早晚氣溫仍低，往山區活動仍要多帶一件衣服。在沿岸及海上風浪部份：宜蘭蘇澳沿海預測天氣為『多雲局部陣雨或雷雨』，風向為『偏北轉西南風』，風浪為『小浪』，平均風力4級以下雷雨區陣風8級。海岸邊以蘇澳為例，天氣為『多雲午後短暫雷陣雨』，氣溫25~31度，風力在1~3級左右，降雨機率為70%。</span>
						</div>
						
						
						<!-- 表單-->
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<tr>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
							</table>
						</div>
						<!-- 無邊框表單-->
						<table class="table table-hover table-striped">
							<tr>
								<th>標題</th>
								<th>標題</th>
								<th>標題</th>
								<th>標題</th>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
						</table>
						<!-- 無序清單-->
						<h4>無序清單</h4>
						<ul>
							<li>無序清單</li>
							<li>無序清單</li>
							<li>無序清單
								<ul>
									<li>無序清單</li>
									<li>無序清單</li>
								</ul>
							</li>
							<li>無序清單</li>
							<li>無序清單</li>
							<li>無序清單</li>
						</ul>
						<!-- 有序清單-->
						<h4>有序清單</h4>
						<ol>
							<li>有序清單</li>
							<li>有序清單</li>
							<li>有序清單
								<ol>
									<li>有序清單</li>
									<li>有序清單</li>
								</ol>
							</li>
							<li>有序清單</li>
							<li>有序清單</li>
							<li>有序清單</li>
						</ol>
						<!-- 術語清單-->
						<h4>術語清單</h4>
						<dl>
							<dt>專業術語</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt>專業術語</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
							<dt>專業術語222222</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
						</dl>
						<!-- List_Download 檔案下載-->
						<div class="List_Download">
							<h4><i class="icon-download-outline"></i>檔案下載</h4>
							<ul>
								<li><a href="">檔案名稱檔案名稱檔案名.pdf</a></li>
								<li><a href="">檔案名稱檔案名稱檔案名.pdf</a></li>
								<li><a href="">檔案名稱檔案名稱檔案名.pdf</a></li>
							</ul>
						</div>	
						<!-- List_Link 相關連結-->
						<div class="List_Link">
							<h4><i class="icon-link"></i>相關連結</h4>
							<ul>
								<li><a href="">連結標題 </a></li>
								<li><a href="">連結標題</a></li>
								<li><a href="">連結標題</a></li>
							</ul>
						</div>												
						<div class="clearfix"></div>			
					</div>
					<!-- function -->
					<?php require_once('include_functionbottom.php'); ?>
				</article>
			</div>
		</div>
	</section>		
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>	
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
	
</body>
</html>