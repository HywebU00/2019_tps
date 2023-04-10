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
						<h2 class="PageTitle">RSS訂閱</h2>
						<h4>什麼是RSS？</h4>
						<p>RSS的英文全稱是 Really Simple Syndication，是一種透過XML標準所制定的資料格式，可以將網頁內容抽取出來，使用者可針對有興趣的訊息資訊進行訂閱，透過RSS閱讀器，看到即時更新的內容。</p>
						<h4>如何訂閱 RSS？</h4>
						<p>下載RSS Reader或支援RSS功能的瀏覽器，安裝完成後，選擇所要訂閱的頻道，將RSS連結匯入。</p>
						<button type="button" class="btn RssBtn">最新消息 RSS<i class="icon-rss"></i></button>
						<button type="button" class="btn RssBtn">活動訊息 RSS<i class="icon-rss"></i></button>							
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