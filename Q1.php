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
					<div class="ContentPage Forward">									
						<h2 class="PageTitle">條件查詢</h2>	
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inputName" class="col-md-2 control-label">標題</label>
								<div class="col-md-8">
									<input type="name" class="form-control" id="inputName" placeholder="標題">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-md-2 control-label"><span class="required">*</span>內文</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="inputEmail1" placeholder="內文">
								</div>
							</div>
							<div class="form-group">
								<label for="inputName" class="col-md-2 control-label">張貼日</label>
								<div class="col-md-4">
									<div class="input-group date">
										<input type="text" class="form-control" placeholder="起">
										<div class="input-group-addon">
											<span class="icon-calendar"></span>
										</div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="input-group date">
										<input type="text" class="form-control" placeholder="迄">
										<div class="input-group-addon">
											<span class="icon-calendar"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-10">
									<button type="submit" class="btn btn-orange">送出</button>
									<button type="clear" class="btn btn-gray">重填</button>
								</div>
							</div>
						</form>						
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